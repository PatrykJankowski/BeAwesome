# Wczytaj dane z pliku konfiguracyjnego
$envFile = ".\.env"
Get-Content $envFile | ForEach-Object {
    if ($_ -match "^\s*([^=]+)\s*=\s*(.*)\s*$") {
        Set-Item -Path "env:$($matches[1].Trim())" -Value $matches[2].Trim()
    }
}

$ftpServer = $env:FTP_SERVER
$user = $env:FTP_USER
$password = $env:FTP_PASS
$localPath = Join-Path -Path (Get-Location) -ChildPath $env:LOCAL_PATH

# Pobierz pliki z dist/
$files = Get-ChildItem -Path $localPath -Recurse -File

foreach ($file in $files) {
    $relativePath = $file.FullName.Substring($localPath.Length).TrimStart('\')
    $ftpPath = "$ftpServer/$relativePath" -replace '\\','/'

    Write-Host "Uploading $relativePath → $ftpPath"

    $ftpRequest = [System.Net.FtpWebRequest]::Create($ftpPath)
    $ftpRequest.Credentials = New-Object System.Net.NetworkCredential($user, $password)
    $ftpRequest.Method = [System.Net.WebRequestMethods+Ftp]::UploadFile

    $ftpRequest.UseBinary = $true
    $ftpRequest.UsePassive = $true

    $content = [System.IO.File]::ReadAllBytes($file.FullName)
    $ftpStream = $ftpRequest.GetRequestStream()
    $ftpStream.Write($content, 0, $content.Length)
    $ftpStream.Close()
}
