
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAd4yeeQueWYZAuuf-dWTrBTi6MOWWmPMM",
    authDomain: "absence-management-be4a9.firebaseapp.com",
    databaseURL: "https://absence-management-be4a9-default-rtdb.firebaseio.com",
    projectId: "absence-management-be4a9",
    storageBucket: "absence-management-be4a9.appspot.com",
    messagingSenderId: "815505077913",
    appId: "1:815505077913:web:51d227efd001d15c082a08",
    measurementId: "G-5TGT2DTK4Q"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  
  //facebook instance
  var provider = new firebase.auth.FacebookAuthProvider();
