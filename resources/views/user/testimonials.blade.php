
<style>
.testimonial-section {
  display: flex;
  justify-content: space-between;
}

.testimonial-item {
  width: calc(33.33% - 20px);
  margin: 10px;
  padding: 20px;
  background-color: #f9dada;
  border-radius: 5px;
}

.testimonial-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

.client-picture {
  width: 100;
  height: 100px;
  
  margin-bottom: 10px;
}

.testimonial-text {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 10px;
}

.testimonial-info {
  display: flex;
  align-items: center;
  justify-content: center;
}

img .client-name {
  font-size: 20px;

  margin-right: 10px;
}

.ratings {
  display: flex;
  align-items: center;
}

.stars {
  display: inline-block;
  background-image: url(star.png);
  background-repeat: repeat-x;
  background-size: auto 100%;
  width: 80px;
  height: 16px;
  margin-right: 5px;
  overflow: hidden;
}

.stars:before {
  content: "";
  display: block;
  width: calc(80px * attr(data-rating) / 5);
  height: 100%;
  background-color: #ffd700;
}

  </style>
  
<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">What people say about us</h1>
      <div class="row mt-5">

        <div class="testimonial-section">
            <div class="testimonial-item">
              <div class="testimonial-content">
                <img class="client-picture" src="../assets/img/person/patient_1.jpg" alt="">
                <p class="testimonial-text">"I had a great experience with XYZ Telemedicine. The doctors were friendly and the service was efficient."</p>
                <div class="testimonial-info">
                  <h5 class="client-name">John Doe</h5>
                  <div class="ratings">
                     <!-- <div class="stars" data-rating="4.2"></div>   -->
                  </div>
                </div>
              </div>
            </div>
          
            <div class="testimonial-item">
              <div class="testimonial-content">
                <img class="client-picture" src="../assets/img/person/patient_2.jpg" alt="">
                <p class="testimonial-text">"I highly recommend XYZ Telemedicine. The doctors provided accurate diagnosis and the platform was user-friendly."</p>
                <div class="testimonial-info">
                  <h5 class="client-name">Jane Smith</h5>
                  <div class="ratings">
                     <!-- <div class="stars" data-rating="4.2"></div>   -->
                  </div>
                </div>
              </div>
            </div>
          
            <div class="testimonial-item">
              <div class="testimonial-content">
                <img class="client-picture" src="../assets/img/person/patient_3.jpg" alt="">
                <p class="testimonial-text">"I'm impressed with XYZ Telemedicine. The doctors were knowledgeable and the platform provided convenient access to healthcare."</p>
                <div class="testimonial-info">
                  <h5 class="client-name">Sarah Johnson</h5>
                  <div class="ratings">
                   <!-- <div class="stars" data-rating="4.2"></div>   -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          


      </div>
    </div>
</div>

