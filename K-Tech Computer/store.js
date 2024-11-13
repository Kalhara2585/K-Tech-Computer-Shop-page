// store.js (For future interactivity)

// Example: Add to cart functionality
const cart = [];

function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice });
    alert(`${productName} has been added to your cart!`);
}

// Example usage:
// addToCart('Intel i7 Processor', 300);
