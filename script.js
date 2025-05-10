document.querySelectorAll(".borrar").forEach(boton => {
    boton.addEventListener("click", async () => {
        let id = boton.dataset.id;
        await fetch("delete.php", {
            method: "POST",
            body: new URLSearchParams({ id })
        });
        location.reload();
    });
});