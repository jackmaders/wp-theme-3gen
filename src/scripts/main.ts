export default async function main() {
  const navigationSelector = "[data-script='navigation']";
  const navigationElements =
    document.querySelectorAll<HTMLElement>(navigationSelector);

  if (navigationElements) {
    const navigation = await import("./templates/navigation");
    navigationElements.forEach(navigation.default);
  }
}
