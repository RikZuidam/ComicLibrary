class ShoppingCart{
    constructor(){
        // create cart based on cookies and empty if it doesnt exist
        const cookiecart = this.#getCookie("cart");
        cookiecart ? this.cart = cookiecart : this.cart = [];
        
    }
    /**
     * adds the itemID or array of itemID's to cart
     * @param {Number} itemId product ID/ID's to be added
     */
    addCartItem(itemId){
        if(typeof itemId === "number"){
            this.cart.push(itemId);
        }else if(typeof itemId === "object"){
            itemId.forEach(e => {
                this.cart.push(e);
            });
        }
        this.saveCart();
    }
    /**
     * remove itemid from cart
     * @param {Number} itemId product ID to be deleted
     */
    removeCartItem(itemId){
        const index = this.cart.indexOf(itemId);
        if(index > -1) this.cart.splice(index, 1);
        this.saveCart();
    }
    /**
     * removes all products from cart
     */
    clearCartItems(){
       this.cart = [];
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
     * Add click listener to all elements with "add-to-cart" attribute
     * When button is pressed adds the attribute value to the cart
     */
    addCartListeners(){
        const addToCartButtons = document.querySelectorAll("*[add-to-cart]");
        addToCartButtons.forEach(e => {
            e.addEventListener("click", (e)=>{
                this.addCartItem(Number(e.target.getAttribute("add-to-cart")));
            })
        });
    }
}



const cart = new ShoppingCart();

if(document.readyState === "complete" || document.readyState === "interactive"){
    cart.addCartListeners();
}else{window.addEventListener("DOMContentLoaded", ()=>{
    cart.addCartListeners();
});}

// const cart = new ShoppingCart();
// cart.clearCartItems(); // remove all items
// cart.addCartItem(55); // add productID to cart
// cart.removeCartItem(55); // remove productID from cart
// cart.getCartContents(); // get array of productIDs from cart