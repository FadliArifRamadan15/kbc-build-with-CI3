<section id="header">
    <div class="nav container__navbar">
        <div class="nav__data">
            <a href="" class="nav__logo">
                <img id="logo" src="https://kbc.or.id/img/general/KBC-Logo_1594107681.png" class="logo" alt="" />
            </a>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>
        </div>

        <!-- NAV MENU -->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li>
                    <a href="<?php echo site_url('./') ?>" class="nav__link">Beranda</a>
                </li>
                <a href="<?php echo site_url('./eksplorasi') ?>" class="nav__link">Eksplorasi</a>
                </li>
                <li>
                    <a href="<?php echo site_url('./consultation') ?>" class="nav__link">Consultant</a>
                </li>

                <li>
                    <a href="<?php echo site_url('./blog') ?>" class="nav__link">Blog</a>
                </li>
                <li>
                    <a href="<?php echo site_url('./faq') ?>" class="nav__link">FAQ</a>
                </li>
            </ul>
        </div>

        <div class="button__navbar">
            <?php if (isset($user['name']) ? $user['name'] : '' != null) : ?>
            <a href="<?php echo site_url('auth/user-profile') ?>" class="user-login">
                <img src="<?php echo base_url('assets/img/user-profile.jpg') ?>" alt="" />
                <p><?= isset($user['name']) ? $user['name'] : '' ?></p>
            </a>
            <?php else : ?>
            <a href="<?php echo site_url('auth/sign-in') ?>">
                <button class="log-secondary-button">
                    Masuk
                </button>
            </a>
            <a href="<?php echo site_url('auth/sign-up') ?>">
                <button class="log-primary-button">
                    Registrasi
                </button>
            </a>
            <?php endif; ?>
        </div>
    </div>
</section>