function updateTime() {
    // Make a GET request to the World Time API
    fetch("http://worldtimeapi.org/api/timezone/Europe/Belgrade")
  .then(response => response.json()) // Parse the JSON response
  .then(data => {
    // Extract the datetime information
    const datetime = data.datetime;

    // Parse the datetime string into a Date object
    const date = new Date(datetime);

    // Extract hours and minutes
    const hours = date.getHours().toString().padStart(2, '0'); // Ensure two digits
    const minutes = date.getMinutes().toString().padStart(2, '0'); // Ensure two digits

    // Update the content of the <h6> element with the formatted time
    const h6Element = document.querySelector('.vreme');
    h6Element.textContent = hours + ":" + minutes;
  })
  .catch(error => {
    console.error('Error fetching data:', error);
  });

  }

  // Call updateTime initially and then set it to update every minute
  updateTime();
  setInterval(updateTime, 60000); // Update every minute (60000 milliseconds)