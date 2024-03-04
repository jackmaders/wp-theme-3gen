export default function navigation(element: HTMLElement) {
  const wpAdminBar = document.querySelector("#wpadminbar");
  if (wpAdminBar) element.style.marginTop = "46px";

  const toggleButton = element.querySelector("button.toggle-button");
  const dropdownMenu = element.querySelector("div.dropdown-menu");

  toggleButton?.addEventListener("click", () => {
    dropdownMenu?.classList.toggle("max-sm:grid-rows-0fr");
    dropdownMenu?.classList.toggle("max-sm:grid-rows-1fr");
    toggleButton?.classList.toggle("after:mask-bars-3");
    toggleButton?.classList.toggle("after:mask-x-mark");
  });
}
