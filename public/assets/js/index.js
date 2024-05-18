// Fetch Vehicles for Selection



getVehiclesSelection();
async function getVehiclesSelection() {
  try {
    const response = await fetch("http://localhost:8000/api/vehicles/", {
      method: 'GET',  // Change the method to GET
      headers: {
        Accept: "application/json",
      },
    });

    if (response.ok) {
      const json = await response.json();

     
      let container = '<option value="">Select Vehicle</option>';
      json.forEach((element) => {
        container += `<option id="${element.id}" value="${element.id}">${element.body_style}</option>`;
      });

      const selectElement = document.querySelector('#car_body_style');
      if (selectElement) {
        selectElement.innerHTML = container;
      } else {
        console.error("Select element not found");
      }


      let container1 = '<option value="">Select VIN</option>';
      json.forEach((element) => {
        container1 += `<option id="${element.id}" value="${element.id}">${element.vin}</option>`;
      });

      const selectElement1 = document.querySelector('#vehicle_vin');
      if (selectElement1) {
        selectElement1.innerHTML = container1;
      } else {
        console.error("Select element not found");
      }



      

    let car_image = [
        {id: 1, image:"rav42.jpg"},
        {id: 2, image:"chevy.png"},
        {id: 3, image:"Model.JPG"},
        {id: 4, image:"ford ranger.jpg"},
        {id: 5, image:"gmc.jpg"},
        {id: 6, image:"pick2.png"},
        {id: 7, image:"sed.png"},
        {id: 8, image:"tesla model3.jpg"},
        {id: 9, image:"SUV chevrolet.jpg"},
        {id: 10, image:"sedona.jpg"},
        {id: 11, image:"rav4.jpg"},
    ]


    let car_price = [
      "10000",
      "20000",
      "30000",
      "40000",
      "50000",
      "60000",
      "70000",
      "80000",
      "90000",
      "100000",
      "10000",
    ]


    let car_link = [
      "SUV1.html",
      "SUV2.html",
      "electric car1.html",
      "electric car2.html",
      "pickup1.html",
      "pickup2.html",
      "minivan1.html",
      "minivan2.html",
      "convertible1.html",
      "convertible2.html"
    ]

    

      let container2 = '<option value="">Select Brand</option>';
      json.forEach((element) => {

        container2 += `<option id="${element.id}" value="${element.id}">${element.name}</option>`;
      });

      const selectElement2 = document.querySelector('#vehicle_brand');
      if (selectElement2) {
        selectElement2.innerHTML = container2;
      } else {
        console.error("Select element not found");
      }


    
      let container3 = '<option value="">Select Model</option>';

      json.forEach((element) => {
        container3 += `<option id="${element.id}" value="${element.id}">${element.models_name}</option>`;
      });

      const selectElement3 = document.querySelector('#vehicle_model');
      if (selectElement3) {
        selectElement3.innerHTML = container3;
      } else {
        console.error("Select element not found");
      }



      let container4 = '<option value="">Select Transmission</option>';

      json.forEach((element) => {
        container4 += `<option id="${element.id}" value="${element.id}">${element.color}</option>`;
      });

      const selectElement4 = document.querySelector('#vehicle_transmission');
      if (selectElement4) {
        selectElement4.innerHTML = container4;
      } else {
        console.error("Select element not found");
      }


      let container5 = '<option value="">Select Engine</option>';

      json.forEach((element) => {
        container5 += `<option id="${element.id}" value="${element.id}">${element.engine}</option>`;
      });

      const selectElement5 = document.querySelector('#vehicle_engine');
      if (selectElement4) {
        selectElement5.innerHTML = container5;
      } else {
        console.error("Select element not found");
      }

      
      let container6 = '<option value="">Select Color</option>';

      json.forEach((element) => {
        container6 += `<option id="${element.id}" value="${element.id}">${element.color}</option>`;
      });

      const selectElement6 = document.querySelector('#vehicle_color');
      if (selectElement4) {
        selectElement6.innerHTML = container6;
      } else {
        console.error("Select element not found");
      }




      let carsContainer =  "";
      let countArr = 0;

    
      json.forEach((element) => {


        
       console.log(element.vehicle_id);
        carsContainer += `<div class="col-md-4 mt-5">
        <div class="card card-box-a card-shadow">
          <div class="object-fit-sm-contain border rounded" alt="...">>
            <img
              src="assets/img/${car_image[countArr].image}"
              alt=""
              class="img-a"
              width="500"
              height="200"
            />
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <div class="card-header-a">
                <h2 class="card-title-a">
                  <a href="#"> <span class="fs-6"> ${element.body_style}</span> <br />${element.models_name}</a>
                </h2>
              </div>
              <div class="card-body-a">
                <div class="price-box d-flex">
                  <span class="price-a">price | $${car_price[element.vehicle_id]}</span>
                </div>
                <a href="${car_link[countArr]}" class="link-a">
                  Click here to view
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
              <div class="card-footer-a">
                <ul class="card-info d-flex justify-content-around">
                  <li>
                    <h4 class="card-info-title">Vehicle</h4>
                    <span>${element.body_style}</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Brand</h4>
                    <span>${element.name}</span>
                  </li>
                  <li>
                    <h4 class="card-info-title">Model</h4>
                    <span>${element.models_name}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>`
        
      countArr++;

      });
      

      document.getElementById("cars_container").innerHTML = carsContainer;
  

    } else {
      console.error("Failed to fetch vehicles for selection. Status:", response.status);
    }
  } catch (error) {
    console.error("An error occurred while fetching vehicles for selection", error);
  }
}

 // Function to get and update data
 function getVehicleData() {
  // Get the element by its ID
  var dataContainer = document.getElementById("dataContainer");

  // Replace the content with new data (you can modify this part)
  var newData = "New Data: " + new Date().toLocaleTimeString();
  dataContainer.textContent = newData;
}
// Get All Vehicles




// Rest of the code remains the same...
// Function to reset filters
function resetFilters() {
    // Reset all select elements to their default values
    document.querySelectorAll('.filter-options-section select').forEach(select => {
      select.value = '';
    });
  
    // Trigger the form submission to fetch all vehicles without filters
    document.querySelector('.form-inline').dispatchEvent(new Event('submit'));
  }
  
  