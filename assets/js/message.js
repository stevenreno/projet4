class GestionPopup {
    constructor() {
        this.cacherBlock();
    }
    cacherBlock() {
        setTimeout(function () {
            document.getElementById('blockMessage').style.display = "none";
        }, 3000);
    }
}
