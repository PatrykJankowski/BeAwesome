<div class="wrap" style="margin: 20px 20px 20px 0px;">

    <!-- SVG Logo -->
    <div style="margin-bottom: 30px;">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Be Awesome" style="height: 80px;">
    </div>

    <h1 style="font-size: 32px; font-weight: 600; margin-bottom: 30px;">Panel administratora</h1>

    <div style="display: flex; flex-wrap: wrap; gap: 16px;">

        <a href="<?php echo admin_url('edit.php?post_type=page'); ?>" class="button"
            style="padding: 8px 20px; background-color: #59524c; color: #fff; border: none; border-radius: 4px; font-size: 15px; text-decoration: none;">
            ✏️ Zarządzanie podstronami
        </a>

        <a href="<?php echo admin_url('post.php?post=14&action=edit'); ?>" class="button"
            style="padding: 8px 20px; background-color: #59524c; color: #fff; border: none; border-radius: 4px; font-size: 15px; text-decoration: none;">
            📩 Dane kontaktowe i godziny otwarcia
        </a>

        <a href="https://app.fitssey.com" target="_blank" class="button"
            style="padding: 8px 20px; background-color: #c7a589; color: #fff; border: none; border-radius: 4px; font-size: 15px; text-decoration: none;">
            🧘‍♀️ Panel Fitssey
        </a>

    </div>

</div>