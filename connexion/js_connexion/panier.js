function savepanier(panier) {
    localStorage.setItem("panier",JSON.stringify(panier));
}

function getpanier(){
    let panier = localStorage.getItem("panier");
    if (panier == null){
        return [];
    }
    else{
        return JSON.parse(panier);
    }
}

function addpanier(produit){
    let panier = getpanier();
    panier.push(produit);
    savepanier(panier);
}