document.getElementById('filter-form').addEventListener('submit', function (e) {
  e.preventDefault();

  const priceRange = document.getElementById('price-range').value;
  const category = document.getElementById('category').value;

  const products = document.querySelectorAll('.product');

  products.forEach(product => {
    const productPrice = parseInt(product.getAttribute('data-price'));
    const productCategory = product.getAttribute('data-category');

    let priceMatch = false;
    if (priceRange === 'all') {
      priceMatch = true;
    } else if (priceRange === '0-100' && productPrice <= 100) {
      priceMatch = true;
    } else if (priceRange === '101-200' && productPrice > 100 && productPrice <= 200) {
      priceMatch = true;
    } else if (priceRange === '201-300' && productPrice > 200 && productPrice <= 300) {
      priceMatch = true;
    } else if (priceRange === '301-400' && productPrice > 300 && productPrice <= 400) {
      priceMatch = true;
    } else if (priceRange === '401-500' && productPrice > 400 && productPrice <= 500) {
      priceMatch = true;
    } else if (priceRange === '501+' && productPrice > 500) {
      priceMatch = true;
    }

    const categoryMatch = category === 'all' || category === productCategory;

    if (priceMatch && categoryMatch) {
      product.style.display = 'block';
    } else {
      product.style.display = 'none';
    }
  });
});