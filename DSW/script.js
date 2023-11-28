document.addEventListener('DOMContentLoaded', function () {
    const quantityElement = document.querySelector('.quantity');
    const plusBtn = document.querySelector('.plus-btn');
    const minusBtn = document.querySelector('.minus-btn');

    plusBtn.addEventListener('click', function () {
        quantityElement.textContent = parseInt(quantityElement.textContent) + 1;
    });

    minusBtn.addEventListener('click', function () {
        const currentQuantity = parseInt(quantityElement.textContent);
        if (currentQuantity > 1) {
            quantityElement.textContent = currentQuantity - 1;
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const cartItems = [
      { name: 'Item 1', quantity: 2, price: 10 },
      { name: 'Item 2', quantity: 1, price: 15 },
      // Add more items as needed
    ];
  
    function updateCart() {
      const cartItemsContainer = document.getElementById('cart-items');
      let total = 0;
  
      // Clear previous content
      cartItemsContainer.innerHTML = '';
  
      // Display cart items
      cartItems.forEach(item => {
        const cartItem = document.createElement('tr');
        cartItem.innerHTML = `
          <td>${item.name}</td>
          <td>${item.quantity}</td>
          <td>$${item.price.toFixed(2)}</td>
          <td>$${(item.quantity * item.price).toFixed(2)}</td>
          <td><button class="remove-btn" onclick="removeFromCart('${item.name}')">Remove</button></td>
        `;
        cartItemsContainer.appendChild(cartItem);
  
        total += item.quantity * item.price;
      });
  
      // Display total
      const totalRow = document.createElement('tr');
      totalRow.classList.add('total');
      totalRow.innerHTML = `<td colspan="3"></td><td>Total: <span>$${total.toFixed(2)}</span></td><td></td>`;
      cartItemsContainer.appendChild(totalRow);
    }
  
    // Initial update
    updateCart();
  
    // Function to remove item from the cart
    window.removeFromCart = function (itemName) {
      const index = cartItems.findIndex(item => item.name === itemName);
  
      if (index !== -1) {
        cartItems.splice(index, 1);
        updateCart();
      }
    };
  });
  