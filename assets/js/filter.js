document.getElementById('filter-form').addEventListener('submit', function (e) {
  e.preventDefault();

  const priceRange = document.getElementById('price-range').value;
  const category = document.getElementById('category').value;
  const shoeType = document.getElementById('shoe-type').value;

  const products = document.querySelectorAll('.product');

  products.forEach(product => {
    const productPrice = parseInt(product.getAttribute('data-price'));
    const productCategory = product.getAttribute('data-category');
    const productShoeType = product.getAttribute('data-shoe-type');

    const priceMatch = productPrice <= priceRange;
    const categoryMatch = category === 'all' || category === productCategory;
    const shoeTypeMatch = shoeType === 'all' || shoeType === productShoeType;

    if (priceMatch && categoryMatch && shoeTypeMatch) {
      product.style.display = 'block';
    } else {
      product.style.display = 'none';
    }
  });
});