document.addEventListener("DOMContentLoaded", () => {
  // Mobile Menu Toggle
  const btn = document.getElementById("mobile-menu-btn");
  const menu = document.getElementById("mobile-menu");
  if (btn && menu) {
    const icon = btn.querySelector("i");
    btn.addEventListener("click", () => {
      menu.classList.toggle("hidden");
      if (menu.classList.contains("hidden")) {
        if (icon) {
          icon.classList.remove("fa-times");
          icon.classList.add("fa-bars");
        }
        document.body.style.overflow = "";
      } else {
        if (icon) {
          icon.classList.remove("fa-bars");
          icon.classList.add("fa-times");
        }
        document.body.style.overflow = "hidden";
      }
    });

    // Close mobile menu when clicking a link
    menu.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        menu.classList.add("hidden");
        if (icon) {
          icon.classList.remove("fa-times");
          icon.classList.add("fa-bars");
        }
        document.body.style.overflow = "";
      });
    });
  }

  // Sticky Header Effect
  const header = document.getElementById("main-header");
  const topBar = document.getElementById("top-contact-bar");
  const logoImg = header ? header.querySelector("img") : null;

  const handleScroll = () => {
    if (!header) return;
    if (window.scrollY > 30) {
      // Scrolled State
      header.classList.remove(
        "bg-gradient-to-b",
        "from-white/80",
        "to-transparent",
        "py-4"
      );
      header.classList.add(
        "bg-white/95",
        "backdrop-blur-md",
        "shadow-md",
        "py-2"
      );

      if (topBar) {
        topBar.classList.remove("hidden", "opacity-0", "-translate-y-2");
      }

      if (logoImg) {
        logoImg.classList.remove("h-20");
        logoImg.classList.add("h-12");
      }
    } else {
      // Top State
      header.classList.add(
        "bg-gradient-to-b",
        "from-white/80",
        "to-transparent",
        "py-4"
      );
      header.classList.remove(
        "bg-white/95",
        "backdrop-blur-md",
        "shadow-md",
        "py-2"
      );

      if (topBar) {
        topBar.classList.add("hidden", "opacity-0", "-translate-y-2");
      }

      if (logoImg) {
        logoImg.classList.add("h-20");
        logoImg.classList.remove("h-12");
      }
    }
  };

  window.addEventListener("scroll", handleScroll);
  handleScroll();

  // Accordion / FAQ Logic
  const accordionItems = document.querySelectorAll(".accordion-item");
  accordionItems.forEach((item) => {
    const button = item.querySelector("button");
    const content = item.querySelector("div[class*='max-h-0']");
    const icon = item.querySelector("i");

    if (button && content) {
      button.addEventListener("click", () => {
        const isOpen = content.style.maxHeight;

        accordionItems.forEach((otherItem) => {
          if (otherItem !== item) {
            const otherContent = otherItem.querySelector("div[class*='max-h-0']");
            const otherIcon = otherItem.querySelector("button i.fa-chevron-down");
            if (otherContent) otherContent.style.maxHeight = null;
            if (otherIcon) otherIcon.classList.remove("rotate-180");
          }
        });

        if (isOpen) {
          content.style.maxHeight = null;
          if (icon) icon.classList.remove("rotate-180");
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
          if (icon) icon.classList.add("rotate-180");
        }
      });
    }
  });

  // Team Filter Logic on About Page
  const teamFilters = document.querySelectorAll(".team-filter");
  const teamCards = document.querySelectorAll(".team-card");

  if (teamFilters.length && teamCards.length) {
    const setActiveFilter = (activeButton) => {
      teamFilters.forEach((btn) => {
        const isActive = btn === activeButton;
        btn.classList.toggle("bg-brand-purple", isActive);
        btn.classList.toggle("text-white", isActive);
        btn.classList.toggle("bg-white", !isActive);
        btn.classList.toggle("text-brand-purple", !isActive);
      });
    };

    const filterCards = (filter) => {
      teamCards.forEach((card) => {
        if (filter === "all" || card.dataset.category === filter) {
          card.classList.remove("hidden");
        } else {
          card.classList.add("hidden");
        }
      });
    };

    teamFilters.forEach((button) => {
      button.addEventListener("click", () => {
        const filter = button.dataset.filter;
        if (!filter) return;
        setActiveFilter(button);
        filterCards(filter);
      });
    });
  }
});
