# BeAwesome Theme

This is a custom WordPress theme built with Tailwind CSS and Gulp for modern and efficient development. It includes an automated deployment process using GitHub Actions and FTP.

## 📦 Features

- WordPress-compatible theme
- Gulp 5 build system
- Tailwind CSS v3
- Sass with PostCSS support
- Image optimization with WebP
- HTML/CSS/JS/JSON minification
- GitHub Actions for deployment via FTP

## 🛠 Project Structure

```
beawesome/
├── dist/            # Compiled theme output (production-ready)
├── src/             # Source files
│   ├── sass/        # Sass styles
│   ├── img/         # Source images
│   ├── js/          # JavaScript files
│   ├── *.php        # PHP templates
├── gulpfile.js      # Gulp tasks
├── package.json     # NPM scripts & dependencies
```

## 🧪 Local Development

### Install dependencies

```bash
npm install
```

### Start development mode (with file watching)

```bash
npm run dev
```

### Build for production

```bash
npm run build
```

## ⚙️ Gulp Tasks

- `gulp` - Clean + compile all + watch for changes
- `gulp deploy` - Clean + compile without watching (for deployment)

## 🚀 Deployment (FTP via GitHub Actions)

This project uses a GitHub Action to automatically deploy to an FTP server when you push to the `master` branch.

### Secrets required in your GitHub repository:

- `FTP_SERVER` – FTP host
- `FTP_USER` – FTP username
- `FTP_PASS` – FTP password

### FTP Directory Structure

The theme will be deployed to:

```
/public_html/beawesome/wp-content/themes/beawesome/
```

### Workflow Location

Check `.github/workflows/ftp-deploy.yml` to adjust FTP path, branch, or any other action.

## 📜 License

ISC

## ✍️ Author

**Softcraft – Patryk Jankowski**

---

Made with ❤️ for modern WordPress development.
