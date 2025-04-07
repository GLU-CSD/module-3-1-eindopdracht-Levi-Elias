// Functie om de prijsrange live bij te werken
function updatePriceRange(value) {
  document.getElementById("price-range-value").textContent = `€0 - €${value}`;
}

// Functie om de sidebar te toggelen
function toggleSidebar() {
  const sidebar = document.querySelector(".sidebar");
  sidebar.classList.toggle("active");
}

// Filterfunctie
document.getElementById("filter-form").addEventListener("submit", function (e) {
  e.preventDefault(); // Voorkom dat het formulier de pagina herlaadt

  // Haal de filterwaarden op
  const priceRange = parseInt(document.getElementById("price-range").value);
  const category = document.getElementById("category").value.toLowerCase();
  const shoeType = document.getElementById("shoe-type").value.toLowerCase();

  // Selecteer alle producten
  const products = document.querySelectorAll(".product");

  // Filter de producten
  products.forEach((product) => {
    const productPrice = parseInt(product.getAttribute("data-price"));
    const productCategory = product.getAttribute("data-category");
    const productShoeType = product.getAttribute("data-shoe-type");

    // Controleer of het product aan de filtercriteria voldoet
    const priceMatch = productPrice <= priceRange;
    const categoryMatch = category === "all" || category === productCategory;
    const shoeTypeMatch = shoeType === "all" || shoeType === productShoeType;

    // Toon of verberg het product op basis van de filtercriteria
    if (priceMatch && categoryMatch && shoeTypeMatch) {
      product.style.display = "block";
    } else {
      product.style.display = "none";
    }
  });
});