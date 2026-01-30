// Navigation scroll effect
const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    navbar.style.background = "rgba(255, 255, 255, 0.98)";
    navbar.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
  } else {
    navbar.style.background = "rgba(255, 255, 255, 0.95)";
    navbar.style.boxShadow = "none";
  }
});

// Mobile menu toggle
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
let isMenuOpen = false;

hamburger.addEventListener("click", () => {
  isMenuOpen = !isMenuOpen;
  if (isMenuOpen) {
    navLinks.style.display = "flex";
    navLinks.style.flexDirection = "column";
    navLinks.style.position = "absolute";
    navLinks.style.top = "100%";
    navLinks.style.left = "0";
    navLinks.style.right = "0";
    navLinks.style.background = "white";
    navLinks.style.padding = "1rem";
    navLinks.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
    hamburger.classList.add("active");
  } else {
    navLinks.style.display = "none";
    hamburger.classList.remove("active");
  }
});

// Close mobile menu when clicking outside
document.addEventListener("click", (e) => {
  if (
    isMenuOpen &&
    !hamburger.contains(e.target) &&
    !navLinks.contains(e.target)
  ) {
    isMenuOpen = false;
    navLinks.style.display = "none";
    hamburger.classList.remove("active");
  }
});

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
      // Close mobile menu if open
      if (isMenuOpen) {
        isMenuOpen = false;
        navLinks.style.display = "none";
        hamburger.classList.remove("active");
      }
    }
  });
});

// Project filters
const filterButtons = document.querySelectorAll(".filter-btn");
const projectCards = document.querySelectorAll(".project-card");

filterButtons.forEach((button) => {
  button.addEventListener("click", () => {
    // Remove active class from all buttons
    filterButtons.forEach((btn) => btn.classList.remove("active"));
    // Add active class to clicked button
    button.classList.add("active");

    const filter = button.getAttribute("data-filter");

    projectCards.forEach((card) => {
      if (filter === "all" || card.getAttribute("data-category") === filter) {
        card.style.display = "block";
        setTimeout(() => {
          card.style.opacity = "1";
          card.style.transform = "translateY(0)";
        }, 100);
      } else {
        card.style.opacity = "0";
        card.style.transform = "translateY(20px)";
        setTimeout(() => {
          card.style.display = "none";
        }, 300);
      }
    });
  });
});

// Skill progress animation
function animateSkills() {
  const skillLevels = document.querySelectorAll(".skill-level");

  skillLevels.forEach((skill) => {
    const progress = skill.querySelector(".progress");
    if (progress) {
      const width = progress.style.width;
      progress.style.width = "0";
      setTimeout(() => {
        progress.style.width = width;
      }, 100);
    }
  });
}

// Run skill animation when skills section is in view
const skillsSection = document.querySelector(".skills-detailed");
if (skillsSection) {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateSkills();
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  observer.observe(skillsSection);
}

// FAQ items toggle
const faqItems = document.querySelectorAll(".faq-item");
faqItems.forEach((item) => {
  const question = item.querySelector("h3");
  const answer = item.querySelector("p");

  if (question && answer) {
    question.addEventListener("click", () => {
      const isExpanded = answer.style.maxHeight;

      // Close all other answers
      faqItems.forEach((otherItem) => {
        const otherAnswer = otherItem.querySelector("p");
        if (otherAnswer && otherAnswer !== answer) {
          otherAnswer.style.maxHeight = null;
          otherItem.classList.remove("active");
        }
      });

      // Toggle current answer
      if (isExpanded) {
        answer.style.maxHeight = null;
        item.classList.remove("active");
      } else {
        answer.style.maxHeight = answer.scrollHeight + "px";
        item.classList.add("active");
      }
    });
  }
});

// Email validation helper
function isValidEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Form handling
const contactForm = document.getElementById("contact-form");
if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // Get form data
    const formData = {
      name: document.getElementById("name").value.trim(),
      email: document.getElementById("email").value.trim(),
      subject: document.getElementById("subject")?.value.trim(),
      message: document.getElementById("message").value.trim(),
    };

    // Basic validation
    if (
      !formData.name ||
      !formData.email ||
      !formData.message ||
      (document.getElementById("subject") && !formData.subject)
    ) {
      alert("Please fill in all required fields.");
      return;
    }

    if (!isValidEmail(formData.email)) {
      alert("Please enter a valid email address.");
      return;
    }

    // Show success message
    const submitBtn = contactForm.querySelector(".submit-btn");
    const originalText = submitBtn.textContent;
    submitBtn.textContent = "Message Sent!";
    submitBtn.style.background = "#00b894";

    // Reset form
    contactForm.reset();

    // Reset button after 3 seconds
    setTimeout(() => {
      submitBtn.textContent = originalText;
      submitBtn.style.background = "";
    }, 3000);
  });
}

// Add scroll reveal animations
window.addEventListener("scroll", reveal);

function reveal() {
  const reveals = document.querySelectorAll(
    ".skill-card, .project-card, .stat"
  );

  reveals.forEach((element) => {
    const windowHeight = window.innerHeight;
    const elementTop = element.getBoundingClientRect().top;
    const elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      element.classList.add("active");
    }
  });
}

// Initialize animations
reveal();
if (skillsSection) {
  animateSkills();
}
