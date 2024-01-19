document.addEventListener("DOMContentLoaded", function () {
    // Get references to the relevant HTML elements
    const classSelect = document.getElementById("class");
    const streamSelect = document.getElementById("stream");
    const studyCenterSelect = document.getElementById("studyCenter");
    const stateSelect = document.getElementById("state");
    const districtSelect = document.getElementById("district");
    const citySelect = document.getElementById("city");

    // Sample data for demonstration purposes (replace with your actual data)
    const streamsData = {
        class1: ["Stream A", "Stream B"],
        class2: ["Stream X", "Stream Y"],
    };

    const studyCentersData = {
        "Stream A": ["Center 1", "Center 2"],
        "Stream B": ["Center 3", "Center 4"],
        "Stream X": ["Center 5", "Center 6"],
        "Stream Y": ["Center 7", "Center 8"],
    };

    const statesData = ["State 1", "State 2", "State 3"];

    const districtsData = {
        "State 1": ["District 1A", "District 1B"],
        "State 2": ["District 2A", "District 2B"],
        "State 3": ["District 3A", "District 3B"],
    };

    const citiesData = {
        "District 1A": ["City 1AA", "City 1AB"],
        "District 1B": ["City 1BA", "City 1BB"],
        "District 2A": ["City 2AA", "City 2AB"],
        "District 2B": ["City 2BA", "City 2BB"],
        "District 3A": ["City 3AA", "City 3AB"],
        "District 3B": ["City 3BA", "City 3BB"],
    };

   // Function to populate the state dropdown
function populateStates() {
    // Clear existing options
    stateSelect.innerHTML = "";

    // Add a disabled default option
    const defaultStateOption = document.createElement("option");
    defaultStateOption.value = "";
    defaultStateOption.text = "Select State";
    defaultStateOption.disabled = true;
    defaultStateOption.selected = true;
    stateSelect.appendChild(defaultStateOption);

    // Add new options
    statesData.forEach((state) => {
        const option = document.createElement("option");
        option.value = state;
        option.text = state;
        stateSelect.appendChild(option);
    });

    // Trigger the change event to update districts and cities
    updateDistricts();
}

// Function to update options based on selected state
function updateDistricts() {
    // Clear existing options
    districtSelect.innerHTML = "";

    // Add a disabled default option
    const defaultDistrictOption = document.createElement("option");
    defaultDistrictOption.value = "";
    defaultDistrictOption.text = "Select District";
    defaultDistrictOption.disabled = true;
    defaultDistrictOption.selected = true;
    districtSelect.appendChild(defaultDistrictOption);

    const selectedState = stateSelect.value;
    const districts = districtsData[selectedState] || [];

    // Add new options
    districts.forEach((district) => {
        const option = document.createElement("option");
        option.value = district;
        option.text = district;
        districtSelect.appendChild(option);
    });

    // Trigger the change event to update cities
    updateCities();
}

// Function to update options based on selected district
function updateCities() {
    // Clear existing options
    citySelect.innerHTML = "";

    // Add a disabled default option
    const defaultCityOption = document.createElement("option");
    defaultCityOption.value = "";
    defaultCityOption.text = "Select City";
    defaultCityOption.disabled = true;
    defaultCityOption.selected = true;
    citySelect.appendChild(defaultCityOption);

    const selectedDistrict = districtSelect.value;
    const cities = citiesData[selectedDistrict] || [];

    // Add new options
    cities.forEach((city) => {
        const option = document.createElement("option");
        option.value = city;
        option.text = city;
        citySelect.appendChild(option);
    });
}


    // Event listeners for changes in the form
    classSelect.addEventListener("change", updateStreams);
    streamSelect.addEventListener("change", updateStudyCenters);
    stateSelect.addEventListener("change", updateDistricts);
    districtSelect.addEventListener("change", updateCities);

    // Initial population of states
    populateStates();
});
