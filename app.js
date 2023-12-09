function login() {
    // Static credentials
    const staticUsername = "admin";
    const staticPassword = "1234";
  
    // Get user input
    const enteredUsername = document.getElementById("username").value;
    const enteredPassword = document.getElementById("password").value;
  
    // Check if credentials match
    if (enteredUsername === staticUsername && enteredPassword === staticPassword) {
      // Redirect to the dashboard (you can replace this with your actual dashboard URL)
      window.location.href = "dashboard.php";
    } else {
      alert("Invalid credentials. Please try again.");
    }
  }
  