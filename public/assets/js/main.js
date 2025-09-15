/* ------------------
    HEADER PAGE JS 
-------------------- */

// Preloader Functionality
var preloader = document.getElementById("loader");
var mainContent = document.getElementById("main-content");

if (preloader) {
  setTimeout(() => {
    preloader.style.opacity = "0";
    preloader.style.display = "none";
    if (mainContent) {
      mainContent.style.display = "block";
    }
  }, 500); // Matches the CSS transition duration
}

window.addEventListener("load", () => {
  closePreloader();
});

// Navigation Menu Functionality
(function () {
  const items = document.querySelectorAll("li[data-menu]");

  items.forEach((li) => {
    const btn = li.querySelector(".nav-btn");
    const panel = li.querySelector(".menu-panel");
    if (!btn || !panel) return;

    // Toggle open on click
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      const isOpen = li.classList.contains("open");

      closeAllExcept(null); // close others first
      if (!isOpen) {
        btn.setAttribute("aria-expanded", "true");
        li.classList.add("open");
      }
    });

    // Close on Escape
    li.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        btn.setAttribute("aria-expanded", "false");
        li.classList.remove("open");
        btn.focus();
      }
    });
  });

  function closeAllExcept(current) {
    document.querySelectorAll("li[data-menu].open").forEach((li) => {
      if (li !== current) {
        li.classList.remove("open");
        const b = li.querySelector(".nav-btn");
        if (b) b.setAttribute("aria-expanded", "false");
      }
    });
  }

  // Optional: close when clicking outside
  document.addEventListener("click", (e) => {
    if (!e.target.closest("li[data-menu]")) {
      closeAllExcept(null);
    }
  });
})();

/* ----------------
    HOME PAGE JS 
------------------ */
// Intersection Observer for Animations
const observerOptions = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1,
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const animationClass = "animate-" + entry.target.dataset.animate;
      entry.target.classList.add(animationClass);
      entry.target.classList.remove("opacity-0");
      observer.unobserve(entry.target); // animate only once
    }
  });
}, observerOptions);

document.querySelectorAll(".observer-target").forEach((el) => {
  observer.observe(el);
});

// Function to Show/Hide Descriptions
function showDescription(id) {
  document
    .querySelectorAll('[id^="desc"]')
    .forEach((el) => el.classList.add("hidden"));
  document.getElementById(id)?.classList.remove("hidden");
}
document.addEventListener("DOMContentLoaded", function () {
  showDescription("descUG");
});

// Swiper Initialization
const swiper = new Swiper(".swiper", {
  slidesPerView: "auto",
  spaceBetween: 24,
  grabCursor: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      spaceBetween: 24,
    },
    1024: {
      spaceBetween: 30,
    },
  },
});

// Counter Animation on Scroll
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  const animateCounter = (counter) => {
    const target = +counter.getAttribute("data-target");
    const suffix = counter.getAttribute("data-suffix") || "";
    let count = 0;
    const increment = Math.ceil(target / 100);

    const updateCounter = () => {
      if (count < target) {
        count += increment;
        counter.textContent = count + suffix;
        setTimeout(updateCounter, 30);
      } else {
        counter.textContent = target + suffix;
      }
    };
    updateCounter();
  };

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target); // Run once
        }
      });
    },
    {
      threshold: 0.5,
    }
  );

  counters.forEach((counter) => {
    observer.observe(counter);
  });
});
/* ----------------
    FAQ PAGE JS 
------------------ */
// FAQ Accordion Functionality for FAQ Page
document.querySelectorAll(".border-b-1").forEach((item) => {
  const header = item.querySelector(".flex.gap-3"); // Question row
  const panel = header?.nextElementSibling; // Answer panel
  const plusIcon = header?.querySelector(".relative.size-3"); // Plus icon wrapper

  if (!header || !panel) return;

  header.classList.add("faq-trigger");
  panel.classList.add("faq-panel");
  header.setAttribute("role", "button");
  header.setAttribute("tabindex", "0");
  header.setAttribute("aria-expanded", "false");

  const closeAll = () => {
    document.querySelectorAll(".faq-panel.open").forEach((p) => {
      p.classList.remove("open");
      const h = p.previousElementSibling;
      if (h) h.setAttribute("aria-expanded", "false");
    });
  };

  const openThis = () => {
    closeAll();
    panel.classList.add("open");
    header.setAttribute("aria-expanded", "true");
  };

  const toggle = () => {
    if (panel.classList.contains("open")) {
      panel.classList.remove("open");
      header.setAttribute("aria-expanded", "false");
    } else {
      openThis();
    }
  };

  // Click on plus icon
  if (plusIcon) {
    plusIcon.style.cursor = "pointer";
    plusIcon.addEventListener("click", (e) => {
      e.stopPropagation(); // prevent double toggle if header click is also bound
      toggle();
    });
  }

  // Click anywhere else on the header
  header.addEventListener("click", (e) => {
    if (!plusIcon || !plusIcon.contains(e.target)) {
      toggle();
    }
  });

  // Keyboard support on header
  header.addEventListener("keydown", (e) => {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      toggle();
    }
  });

  // Optional: rotate plus icon
  if (plusIcon) plusIcon.classList.add("plus");
});

/* ----------------
    BLOGS PAGE JS 
------------------ */
// AJAX Pagination for Blogs
document.addEventListener("DOMContentLoaded", function () {
  const wrapper = document.getElementById("blogListWrapper");

  wrapper.addEventListener("click", function (e) {
    const target = e.target.closest("a"); // find <a> inside pagination
    if (target && target.closest(".pagination")) {
      e.preventDefault();
      const url = target.getAttribute("href");

      fetch(url, {
        headers: {
          "X-Requested-With": "XMLHttpRequest",
        },
      })
        .then((res) => res.text())
        .then((html) => {
          wrapper.innerHTML = html;
          // smooth scroll to top of blogs
          window.scrollTo({
            top: wrapper.offsetTop - 80,
            behavior: "smooth",
          });
        })
        .catch((err) => console.error("Pagination error:", err));
    }
  });
});

// Fade-In-Up Animation on Scroll Trending Blogs
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".fade-in-up");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    },
    {
      threshold: 0.2,
    }
  );

  cards.forEach((card) => observer.observe(card));
});

// Fade-In-Up Animation on Scroll Recent Blogs
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".fade-in-up");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
        }
      });
    },
    {
      threshold: 0.2,
    }
  );

  cards.forEach((card) => observer.observe(card));
});

/* ------------------------
    UNIVERSITIES PAGE JS 
------------------------- */
// Custom Combobox Implementation
(function () {
  // ------- DATA: replace with your own lists or fetch via AJAX -------
  const DATA = {
    "Search University": [
      "University of Toronto",
      "McGill University",
      "University of British Columbia",
      "University of Waterloo",
      "University of Alberta",
      "Western University",
    ],
    "Search Course": [
      "Computer Science",
      "Data Science",
      "Mechanical Engineering",
      "Business Analytics",
      "Civil Engineering",
      "Cybersecurity",
    ],
    "Highest Qualification": [
      "12th Grade",
      "Diploma",
      "Bachelor’s",
      "Master’s",
      "PhD",
    ],
  };

  // Utility: create dropdown under a given input-wrapper
  function ensureMenu(wrapper) {
    let menu = wrapper.querySelector(".combo-menu");
    if (!menu) {
      menu = document.createElement("ul");
      menu.className = "combo-menu hidden";
      wrapper.style.position = "relative"; // ensure absolute menu anchors correctly
      wrapper.appendChild(menu);
    }
    return menu;
  }

  // Build options
  function renderOptions(menu, items) {
    menu.innerHTML = "";
    items.forEach((txt) => {
      const li = document.createElement("li");
      li.className = "combo-item";
      li.textContent = txt;
      li.setAttribute("role", "option");
      menu.appendChild(li);
    });
  }

  // Attach combobox behavior to one field (by its aria-label)
  function setupCombo(labelText) {
    const input = document.querySelector(`input[aria-label="${labelText}"]`);
    if (!input) return;

    // Find the nearest input wrapper (your element with data-slot="input-wrapper")
    const wrapper =
      input.closest('[data-slot="input-wrapper"]') || input.parentElement;
    const menu = ensureMenu(wrapper);
    const allItems = DATA[labelText] || [];
    renderOptions(menu, allItems);

    // Find the arrow button beside the input (your second button in icons area)
    const caret =
      wrapper.querySelector(".combo-caret") ||
      wrapper.querySelector("button:nth-of-type(2)");

    function openMenu() {
      menu.classList.remove("hidden");
      wrapper.classList.add("combo-open");
      input.setAttribute("aria-expanded", "true");
    }

    function closeMenu() {
      menu.classList.add("hidden");
      wrapper.classList.remove("combo-open");
      input.setAttribute("aria-expanded", "false");
      menu
        .querySelectorAll('.combo-item[aria-selected="true"]')
        .forEach((e) => e.removeAttribute("aria-selected"));
    }

    function isOpen() {
      return !menu.classList.contains("hidden");
    }

    function filter(q) {
      const query = (q || "").toLowerCase();
      let any = false;
      menu.querySelectorAll(".combo-item").forEach((li) => {
        const show = li.textContent.toLowerCase().includes(query);
        li.style.display = show ? "" : "none";
        if (show) any = true;
      });
      if (any) openMenu();
      else closeMenu();
    }

    // Events
    input.addEventListener("focus", () => {
      filter(input.value);
      openMenu();
    });
    input.addEventListener("input", () => filter(input.value));
    input.addEventListener("keydown", (e) => {
      const visible = Array.from(menu.querySelectorAll(".combo-item")).filter(
        (li) => li.style.display !== "none"
      );
      let idx = visible.findIndex(
        (li) => li.getAttribute("aria-selected") === "true"
      );

      if (e.key === "ArrowDown") {
        e.preventDefault();
        openMenu();
        idx = Math.min(idx + 1, visible.length - 1);
        visible.forEach((li) => li.removeAttribute("aria-selected"));
        if (visible[idx]) {
          visible[idx].setAttribute("aria-selected", "true");
          visible[idx].scrollIntoView({
            block: "nearest",
          });
        }
      }
      if (e.key === "ArrowUp") {
        e.preventDefault();
        openMenu();
        idx = Math.max(0, idx - 1);
        visible.forEach((li) => li.removeAttribute("aria-selected"));
        if (visible[idx]) {
          visible[idx].setAttribute("aria-selected", "true");
          visible[idx].scrollIntoView({
            block: "nearest",
          });
        }
      }
      if (e.key === "Enter") {
        const sel = visible.find(
          (li) => li.getAttribute("aria-selected") === "true"
        );
        if (sel) {
          e.preventDefault();
          input.value = sel.textContent.trim();
          closeMenu();
          input.dispatchEvent(new Event("change"));
        }
      }
      if (e.key === "Escape") {
        closeMenu();
      }
    });

    // Arrow click
    if (caret) {
      caret.classList.add("combo-caret");
      caret.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation();
        if (isOpen()) closeMenu();
        else {
          filter(input.value);
          openMenu();
        }
        input.focus();
      });
    }

    // Mouse selection
    menu.addEventListener("click", (e) => {
      const li = e.target.closest(".combo-item");
      if (!li) return;
      input.value = li.textContent.trim();
      input.dispatchEvent(new Event("change"));
      closeMenu();
    });

    // Hover highlight
    menu.addEventListener("mousemove", (e) => {
      const li = e.target.closest(".combo-item");
      if (!li) return;
      menu
        .querySelectorAll(".combo-item")
        .forEach((n) => n.removeAttribute("aria-selected"));
      li.setAttribute("aria-selected", "true");
    });

    // Click-outside
    document.addEventListener("click", (e) => {
      if (!wrapper.contains(e.target)) closeMenu();
    });
  }

  // Initialize all three
  setupCombo("Search University");
  setupCombo("Search Course");
  setupCombo("Highest Qualification");
})();

// Dynamic Steps Section
(function () {
  const module = document.getElementById("stepsModule");
  const wrap = document.getElementById("stepsWrap");
  if (!module || !wrap) return;

  const leftLead = document.getElementById("leftLead");
  const leftSub = document.getElementById("leftSub");
  const leftBullets = document.getElementById("leftBullets");
  const leftImage = document.getElementById("leftImage");
  const icon = "<?= base_url('public/') ?>assets/images/icons/listCheck.webp";
  const cards = Array.from(wrap.querySelectorAll(".steps"));
  const def = cards.find((c) => c.hasAttribute("data-default")) || cards[0];

  function renderBullets(items) {
    leftBullets.innerHTML = "";
    (items || []).forEach((txt) => {
      const li = document.createElement("li");
      li.className = "flex items-center";
      li.innerHTML = `<img alt="list check" width="20" height="20" class="inline mr-2" src="${icon}">${txt}`;
      leftBullets.appendChild(li);
    });
  }

  function applyFromCard(card) {
    if (!card) return;
    const lead = card.getAttribute("data-lead") || "";
    const sub = card.getAttribute("data-sub") || "";
    const bullets = (card.getAttribute("data-bullets") || "")
      .split("|")
      .map((s) => s.trim())
      .filter(Boolean);
    const img = card.getAttribute("data-image");

    leftLead.innerHTML = lead;
    leftSub.textContent = sub;
    renderBullets(bullets);
    if (img) {
      leftImage.src = img;
      leftImage.alt = lead || "left visual";
    }
  }

  // initial default
  applyFromCard(def);

  // Update on hover/focus (delegated)
  wrap.addEventListener("pointerover", (e) => {
    const card = e.target.closest(".steps");
    if (card && wrap.contains(card)) applyFromCard(card);
  });

  // Reset when pointer leaves all cards OR leaves the module
  function maybeReset() {
    const overAny = cards.some((c) => c.matches(":hover"));
    if (!overAny) applyFromCard(def);
  }
  wrap.addEventListener("pointerout", maybeReset);
  module.addEventListener("pointerleave", () => applyFromCard(def));

  // Keyboard accessibility + touch
  wrap.addEventListener("focusin", (e) => {
    const card = e.target.closest(".steps");
    if (card) applyFromCard(card);
  });
  wrap.addEventListener("focusout", () => {
    const stillInside = wrap.querySelector(".steps:focus-within");
    if (!stillInside) applyFromCard(def);
  });
  wrap.addEventListener("click", (e) => {
    const card = e.target.closest(".steps");
    if (card) applyFromCard(card);
  });
})();

// Stories Swiper Initialization
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper("#storiesSwiper", {
    slidesPerView: 1.15,
    spaceBetween: 12,
    loop: true,
    speed: 500,
    grabCursor: true,
    keyboard: {
      enabled: true,
    },
    lazy: {
      loadPrevNext: true,
    },
    watchSlidesProgress: true,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 14,
      },
      1024: {
        slidesPerView: 2.25,
        spaceBetween: 16,
      },
      1280: {
        slidesPerView: 2.5,
        spaceBetween: 18,
      },
    },
    pagination: {
      el: ".stories-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".stories-next",
      prevEl: ".stories-prev",
    },
  });
});

// Slider Functionality for "Our Partners" Section
const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");
const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");

let currentIndex = 0;
const totalSlides = slides.length - 4;

function updateSlider() {
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

nextButton.addEventListener("click", () => {
  currentIndex = (currentIndex + 1) % totalSlides;

  updateSlider();
});

prevButton.addEventListener("click", () => {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;

  updateSlider();
});

// FAQ Accordion Functionality for FAQ Page
document.querySelectorAll(".faq-toggle").forEach((toggle) => {
  toggle.addEventListener("click", () => {
    const content = toggle.nextElementSibling;
    const plus = toggle.querySelector(".plus");
    const minus = toggle.querySelector(".minus");

    const isOpen = content.classList.contains("grid-rows-[1fr]");

    // Close all open
    document.querySelectorAll(".faq-content").forEach((el) => {
      el.classList.remove("grid-rows-[1fr]", "opacity-100");
      el.classList.add("grid-rows-[0fr]", "opacity-0");
    });
    document
      .querySelectorAll(".faq-toggle .plus")
      .forEach((p) => p.classList.replace("opacity-0", "opacity-100"));
    document
      .querySelectorAll(".faq-toggle .plus")
      .forEach((p) => p.classList.replace("rotate-90", "rotate-0"));
    document
      .querySelectorAll(".faq-toggle .minus")
      .forEach((m) => m.classList.replace("opacity-100", "opacity-0"));
    document
      .querySelectorAll(".faq-toggle .minus")
      .forEach((m) => m.classList.replace("rotate-0", "rotate-90"));

    if (!isOpen) {
      content.classList.add("grid-rows-[1fr]", "opacity-100");
      content.classList.remove("grid-rows-[0fr]", "opacity-0");
      plus.classList.replace("opacity-100", "opacity-0");
      plus.classList.replace("rotate-0", "rotate-90");
      minus.classList.replace("opacity-0", "opacity-100");
      minus.classList.replace("rotate-90", "rotate-0");
    }
  });
});

// Read More / Read Less Functionality for Blog Details Page
document.addEventListener("DOMContentLoaded", function () {
  const root = document.querySelector(
    ".quick-link .readmore-content-both-device .readmore-long-content > div"
  );
  if (!root) return;

  // First paragraph (the one starting "Russia is known globally...")
  const firstPara = root.querySelector("p");
  if (!firstPara) return;

  // Use existing Read More btn if present; otherwise create one
  let readMoreBtn = document.querySelector(".quick-link .readmore-btn");
  if (!readMoreBtn) {
    readMoreBtn = document.createElement("button");
    readMoreBtn.className =
      "readmore-btn mb-3 transition-all ease-in-out text-test-prep text-sm sm:text-base";
  }
  readMoreBtn.textContent = "Read More";

  // Place Read More right after the first paragraph
  firstPara.insertAdjacentElement("afterend", readMoreBtn);

  // Collapsible wrapper: move everything after Read More into it
  const wrap = document.createElement("div");
  wrap.id = "readmoreBody";
  wrap.className = "readmore-body mt-3";
  wrap.style.display = "none";

  let n = readMoreBtn.nextElementSibling;
  while (n) {
    const next = n.nextElementSibling;
    wrap.appendChild(n);
    n = next;
  }
  readMoreBtn.insertAdjacentElement("afterend", wrap);

  // Create "Read Less" button and append it AT THE END of the expanded content
  const readLessBtn = document.createElement("button");
  readLessBtn.className =
    "readless-btn mb-3 transition-all ease-in-out text-test-prep text-sm sm:text-base";
  readLessBtn.textContent = "Read Less";
  readLessBtn.style.display = "none"; // hidden until expanded
  wrap.appendChild(readLessBtn);

  // ARIA
  readMoreBtn.setAttribute("aria-controls", "readmoreBody");
  readLessBtn.setAttribute("aria-controls", "readmoreBody");
  readMoreBtn.setAttribute("aria-expanded", "false");
  readLessBtn.setAttribute("aria-expanded", "true");

  function expand() {
    wrap.style.display = "";
    readMoreBtn.style.display = "none";
    readLessBtn.style.display = "";
    readLessBtn.focus({
      preventScroll: true,
    });
    readMoreBtn.setAttribute("aria-expanded", "true");
  }

  function collapse() {
    wrap.style.display = "none";
    readLessBtn.style.display = "none";
    readMoreBtn.style.display = "";
    readMoreBtn.setAttribute("aria-expanded", "false");
    readMoreBtn.scrollIntoView({
      block: "nearest",
      behavior: "smooth",
    });
    readMoreBtn.focus({
      preventScroll: true,
    });
  }

  readMoreBtn.addEventListener("click", expand);
  readLessBtn.addEventListener("click", collapse);
});

/* -------------------------------
    SINGLE-0UNIVERSITY PAGE JS 
-------------------------------- */

// University Gallery Swiper Initialization
(function initUniGallery() {
  function init() {
    try {
      if (typeof Swiper === "undefined") {
        console.error("Swiper not loaded — check the CDN <script>.");
        return;
      }
      const root = document.getElementById("uniGallery");
      if (!root) return;

      // Clean any pre-initialized remnants
      root
        .querySelectorAll(".swiper-initialized")
        .forEach((el) => el.classList.remove("swiper-initialized"));
      root
        .querySelectorAll('[style*="transform: translate3d"]')
        .forEach((el) => (el.style.transform = ""));

      // Remove slides with empty images (just in case)
      [...root.querySelectorAll(".swiper-slide img")].forEach((img) => {
        if (!img.getAttribute("src")) img.closest(".swiper-slide")?.remove();
      });

      const mainEl = root.querySelector(".universityImageSwiper");
      const thumbsEl = root.querySelector(".universityImageNavigationSwiper");
      const prevEl = root.querySelector(".uni-prev");
      const nextEl = root.querySelector(".uni-next");

      if (!mainEl || !thumbsEl) return;

      const slideCount = mainEl.querySelectorAll(".swiper-slide").length;
      const loopable = slideCount > 1;

      const thumbs = new Swiper(thumbsEl, {
        slidesPerView: 4,
        spaceBetween: 12,
        freeMode: true,
        watchSlidesProgress: true,
        slideToClickedSlide: true,
        breakpoints: {
          640: {
            slidesPerView: 5,
            spaceBetween: 12,
          },
          1024: {
            slidesPerView: 6,
            spaceBetween: 14,
          },
        },
      });

      const main = new Swiper(mainEl, {
        loop: loopable,
        speed: 500,
        spaceBetween: 0,
        navigation: {
          nextEl,
          prevEl,
        },
        thumbs: {
          swiper: thumbs,
        },
        observer: true,
        observeParents: true,
      });

      // Ensure thumb click always works (loop/no loop)
      function goTo(i) {
        if (Number.isInteger(i))
          main.params.loop ? main.slideToLoop(i) : main.slideTo(i);
      }
      thumbs.on("click", () => goTo(thumbs.clickedIndex));

      // If the gallery starts hidden (tabs/modals), update when visible:
      // new IntersectionObserver(([e],obs)=>{ if(e.isIntersecting){ main.update(); thumbs.update(); obs.disconnect(); } }).observe(mainEl);
    } catch (e) {
      console.error("Init error:", e);
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init(); // DOM already ready
  }
})();

// End of main.js
