<?php get_header(); ?>

<main role="main" aria-labelledby="privacy-title">
    <section class="p-law">
        <div class="p-law__inner l-inner">
            <h1 id="privacy-title" class="p-law__heading">
                <?php the_title(); ?>
            </h1>

            <div class="p-law__profile p-company-profile">
                <div class="p-company-profile__list-wrap">
                    <dl class="p-company-profile__list">
                        <dt class="p-company-profile__term">事業者名</dt>
                        <dd class="p-company-profile__description">株式会社カケル
                        </dd>
                    </dl>
                    <dl class="p-company-profile__list">
                        <dt class="p-company-profile__term">代表者名</dt>
                        <dd class="p-company-profile__description">中島 奨太
                        </dd>
                    </dl>
                    <dl class="p-company-profile__list">
                        <dt class="p-company-profile__term">運営責任者</dt>
                        <dd class="p-company-profile__description">代表取締役　中島 奨太</dd>
                    </dl>
                    <dl class="p-company-profile__list">
                        <dt class="p-company-profile__term">所在地</dt>
                        <dd class="p-company-profile__description">〒530-0001<br>大阪府大阪市北区梅田1-1-3<br>大阪駅前第 3 ビル 29 階 1-1-1 号室
                        </dd>
                    </dl>
                    <dl class="p-company-profile__list">
                        <dt class="p-company-profile__term">電話番号</dt>
                        <dd class="p-company-profile__description">
                            050-3529-8476<br>※電話によるサポートは行っておりません。<br>お問い合わせはメールにてお願いいたします。
                        </dd>
                    </dl>
                    <dl class="p-company-profile__list">
                        <dt class="p-company-profile__term">メールアドレス</dt>
                        <dd class="p-company-profile__description">
                            <a href="mailto:kakeru@kakeru-info.net" target="_blank" rel="noopener">kakeru@kakeru-info.net</a>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="p-law__content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>