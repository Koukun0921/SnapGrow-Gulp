<!-- 認証モーダル -->
<div class="p-modal js-modal" id="auth-modal" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
    <div class="p-modal__overlay js-modal-overlay"></div>
    <div class="p-modal__container">
        <div class="p-modal__content">
            <button type="button" class="p-modal__close js-modal-close" aria-label="モーダルを閉じる">
                <span aria-hidden="true">×</span>
            </button>
            <h2 id="modal-title" class="p-modal__title">アップロードには<br class="u-sp">会員登録が必要です</h2>
            <p class="p-modal__text">写真をアップロードするには、<br class="u-sp">会員登録またはログインが必要です。</p>
            <div class="p-modal__buttons">
                <a href="<?php page_path('register'); ?>" class="p-modal__button p-modal__button--primary">新規登録</a>
                <a href="<?php page_path('login'); ?>" class="p-modal__button p-modal__button--secondary">ログイン</a>
            </div>
        </div>
    </div>
</div>