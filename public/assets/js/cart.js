class ShoppingCart{
    constructor(){
        // create cart based on cookies and empty if it doesnt exist
        const cookiecart = this.#getCookie("cart");
        cookiecart ? this.cart = cookiecart : this.cart = [];
    }
    /**
     * adds the productId or array of productId's to cart
     * @param {Number} productId product ID/ID's to be added
     */
    addCartItem(productId){
        if(typeof productId === "number"){
            this.cart.push(productId);
        }else if(typeof productId === "object"){
            productId.forEach(e => {
                this.cart.push(e);
            });
        }
        this.updateCartCount();
        this.saveCart();
    }
    /**
     * remove productId from cart
     * @param {Number} productId product ID to be deleted
     */
    removeCartItem(productId){
        const index = this.cart.indexOf(productId);
        if(index > -1) this.cart.splice(index, 1);
        this.updateCartCount();
        this.saveCart();
    }
    /**
     * removes all products from cart
     */
    clearCartItems(){
       this.cart = [];
       this.updateCartCount();
       this.saveCart();
    }
    /**
     * returns all items in cart
     * @returns {Array} array of item ID's
     */
    getCartContents(){
        return this.cart;
    }
    /**
     * saves the cart to cookies
     */
    saveCart(){
        this.#setCookie("cart", this.cart);
    }
    /**
     * updates the DOM cart counter number
     */
    updateCartCount(){
        const cartCount = document.querySelector(".cart-overlay > .cart-count");
        this.cart.length > 9 ? cartCount.innerText = "9+" : cartCount.innerText = this.cart.length;
    }
    #setCookie(name, value, days=30){
        var date = new Date();
        date.setDate(date.getDate() + days);
        document.cookie = name + "=" + encodeURIComponent(JSON.stringify(value)) + ';expires=' + date + ',sameSite: "lax"; secure;';
    }
    #getCookie(name){
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if(parts.length === 2) return JSON.parse(decodeURIComponent(parts.pop().split(';').shift()))
    }
    /**
     * Add click listener to all DOM elements with "add-to-cart" attribute,
     * When the registered button is pressed it adds the attribute value to the cart
     */
    addCartListeners(){
        const addToCartButtons = document.querySelectorAll("[add-to-cart]");
        addToCartButtons.forEach(e => {
            e.addEventListener("click", (e)=>{
                this.addCartItem(Number(e.target.getAttribute("add-to-cart")));
            })
        });
    }
    /**
     * Adds the cart overlay button to the body
     */
    addCartOverlay(){
        const cartWrapper = document.createElement("a");
        cartWrapper.setAttribute("href", "/cart");
        cartWrapper.classList.add("cart-overlay");
        const cartItemCount = document.createElement("p");
        cartItemCount.classList.add("cart-count");
        cartItemCount.innerText = 0;
        cartWrapper.innerHTML = `<svg viewBox="0 0 24 21"><path d="M24 3l-.743 2h-1.929l-3.474 12h-13.239l-4.615-11h16.812l-.564 2h-13.24l2.937 7h10.428l3.432-12h4.195zm-15.5 15c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.9-7-1.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z"/></svg>`;
        cartWrapper.append(cartItemCount);
        document.body.append(cartWrapper);
        this.updateCartCount();
    }
}

const cart = new ShoppingCart();

if(document.readyState === "complete" || document.readyState === "interactive"){
    cart.addCartListeners();
    cart.addCartOverlay();
}else{window.addEventListener("DOMContentLoaded", ()=>{
    cart.addCartListeners();
    cart.addCartOverlay();
});}

// const cart = new ShoppingCart();
// cart.clearCartItems(); // remove all items
// cart.addCartItem(55); // add productID to cart
// cart.removeCartItem(55); // remove productID from cart
// cart.getCartContents(); // get array of productIDs from cart
// cart.addCartListeners(); // adds click listeners to all elements containing the "add-to-cart" attribute
// cart.addCartOverlay(); // creates the cart overlay button in the bottom right corner
// cart.updateCartCount(); // updates the small counter in the cart overlay button