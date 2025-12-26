document.addEventListener("DOMContentLoaded", function() {
    // Get reference to the "Enter" button
    const enterBtn = document.getElementById("enterBtn");

    // Add event listener to the "Enter" button
    enterBtn.addEventListener("click", function() {
        // Create a dropdown menu dynamically
        const dropdownContainer = document.createElement("div");
        dropdownContainer.classList.add("dropdown");

        const selectElement = document.createElement("select");
        selectElement.id = "locationDropdown";
        const locations = ["CC3", "Library", "Admin Building"];
        locations.forEach(location => {
            const optionElement = document.createElement("option");
            optionElement.value = location;
            optionElement.textContent = location;
            selectElement.appendChild(optionElement);
        });

        const goButton = document.createElement("button");
        goButton.textContent = "Go";
        goButton.classList.add("btn");

        // Add event listener to the "Go" button
        goButton.addEventListener("click", function() {
            const selectedLocation = selectElement.value;
            alert("You are entering " + selectedLocation);
            // Add code to handle entering the selected location
        });

        dropdownContainer.appendChild(selectElement);
        dropdownContainer.appendChild(goButton);

        // Append the dropdown menu to the DOM
        const mainContainer = document.querySelector(".main");
        mainContainer.appendChild(dropdownContainer);
    });
});