// $(document).ready(() => {
//   axios.get('http://localhost:5000/fetch/carousels')
//     .then(res => {
//       console.log(res.data.data);
//       for(let car of res.data.data){
//         $('#carousel').append(`<div class="intro-section" style="background-image: url(${car.image});">
//         <div class="container">
//           <div class="row align-items-center">
//             <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
//               <h1>${car.heading}</h1>
//               <a href="" class="btn btn-outline-primary mt-2">Button</a>
//             </div>
//           </div>
//         </div>
//       </div>`)
//       }
//     })
//     .catch(err => console.log(err));
// })