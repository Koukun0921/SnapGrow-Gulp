// ハンバーガーメニュー
function initHeader() {
  const hamburger = document.querySelector(".js-hamburger");
  const drawer = document.querySelector(".js-drawer");
  const drawerLinks = document.querySelectorAll(".p-header__drawer-item a");
  const body = document.body;
  if (!hamburger || !drawer) {
    return;
  }
  function openMenu() {
    hamburger.classList.add("is-open");
    drawer.classList.add("is-open");
    body.classList.add("is-fixed");
  }
  function closeMenu() {
    hamburger.classList.remove("is-open");
    drawer.classList.remove("is-open");
    body.classList.remove("is-fixed");
  }
  function toggleMenu() {
    if (drawer.classList.contains("is-open")) {
      closeMenu();
    } else {
      openMenu();
    }
  }
  hamburger.addEventListener("click", (e) => {
    e.preventDefault();
    toggleMenu();
  });
  drawerLinks.forEach((link) => {
    link.addEventListener("click", () => {
      closeMenu();
    });
  });
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && drawer.classList.contains("is-open")) {
      closeMenu();
    }
  });
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      if (window.innerWidth >= 768) {
        closeMenu();
      }
    }, 100);
  });
}
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initHeader);
} else {
  initHeader();
}

// フェードインアニメーション
function initFadeIn() {
  const fadeItems = document.querySelectorAll(".js-fadeIn");
  if (!fadeItems.length) return;
  const handleScroll = () => {
    fadeItems.forEach((el, index) => {
      const rect = el.getBoundingClientRect();
      const triggerPosition = window.innerHeight * 0.75;
      if (rect.top < triggerPosition) {
        el.classList.add("is-active");
      }
    });
  };
  window.addEventListener("scroll", handleScroll);
  handleScroll();
}
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initFadeIn);
} else {
  initFadeIn();
}

// モーダル機能
function initModal() {
  const triggers = document.querySelectorAll(".js-modal-trigger");
  const modals = document.querySelectorAll(".js-modal");
  const body = document.body;
  if (!triggers.length || !modals.length) return;
  // モーダルを開く
  function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    body.classList.add("is-modal-open");
    // 最初のフォーカス可能な要素にフォーカス
    const focusableElements = modal.querySelectorAll(
      'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    if (focusableElements.length) {
      focusableElements[0].focus();
    }
  }
  // モーダルを閉じる
  function closeModal(modal) {
    if (!modal) return;
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    body.classList.remove("is-modal-open");
  }
  // すべてのモーダルを閉じる
  function closeAllModals() {
    modals.forEach((modal) => closeModal(modal));
  }
  // トリガーボタンのイベントリスナー
  triggers.forEach((trigger) => {
    trigger.addEventListener("click", (e) => {
      e.preventDefault();
      const modalId = trigger.getAttribute("data-modal");
      if (modalId) {
        openModal(modalId);
      }
    });
  });
  // 各モーダルのイベントリスナー
  modals.forEach((modal) => {
    // 閉じるボタン
    const closeBtn = modal.querySelector(".js-modal-close");
    if (closeBtn) {
      closeBtn.addEventListener("click", () => closeModal(modal));
    }
    // オーバーレイクリック
    const overlay = modal.querySelector(".js-modal-overlay");
    if (overlay) {
      overlay.addEventListener("click", () => closeModal(modal));
    }
    // モーダル外クリック
    modal.addEventListener("click", (e) => {
      if (e.target === modal) {
        closeModal(modal);
      }
    });
  });
  // Escapeキーで閉じる
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeAllModals();
    }
  });
}
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", initModal);
} else {
  initModal();
}
