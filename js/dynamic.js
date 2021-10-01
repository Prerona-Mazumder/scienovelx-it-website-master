window.addEventListener('DOMContentLoaded', (e) => {
	// Dynamic carousel
	let carouselContainer = document.getElementById('carousel');
	if (carouselContainer) {
		axios
			.get('https://www.admin.learnbird.in/fetch/carousels')
			.then((res) => {
				// console.log(res.data.data);
				for (let item of res.data.data) {
					let carouselItem = document.createElement('div');
					carouselItem.classList.add('swiper-slide', 'carousel-slide');
					let img = document.createElement('img');
					img.src = item.image;
					let overlay = document.createElement('overlay');
					overlay.classList.add(
						'overlay',
						'd-flex',
						'justify-content-center',
						'align-items-center',
						'flex-column',
						'text-center',
						'text-white'
					);
					let h1 = document.createElement('h1');
					h1.classList.add('w-75', 'mx-auto');
					h1.innerText = item.heading;
					let p = document.createElement('p');
					p.classList.add('w-50', 'text-white', 'mx-auto');
					p.innerText = item.description;
					let button = null;
					if (item.button.isBtn) {
						button = document.createElement('a');
						button.classList.add('btn', 'btn-primary', 'mt-3');
						button.innerText = item.button.text;
						button.href = item.button.link;
					}
					overlay.append(h1);
					overlay.append(p);
					if (button) overlay.append(button);
					carouselItem.append(img);
					carouselItem.append(overlay);
					carouselContainer.append(carouselItem);
				}
				let swiper = new Swiper('.swiper-container-carousel', {
					navigation: {
						nextEl: '.swiper-button-next',
						prevEl: '.swiper-button-prev'
					},
					autoplay: {
						delay: 43000,
						disableOnInteraction: false
					}
				});
			})
			.catch((err) => {
				console.log(err);
			});
	}

	// CAROUSEL VIDEO CONTROLS
	const vidEl = document.getElementById('car-video'); 
	$('#play').click(e => {
		vidEl.play();
		$('#play').css('display', 'none');
		vidEl.controls = true;
		vidEl.controlsList = "nodownload"
	})

	// Dynamic features
	let featureContainer = document.getElementById('features');
	let featureContainerMobile = document.getElementById('features-mobile');
	if (featureContainer && featureContainerMobile) {
		axios
			.get('https://www.admin.learnbird.in/fetch/features')
			.then((res) => {
				for (let item of res.data.data) {
					featureContainer.innerHTML += `<div class="swiper-slide feature-slide">
					<img src=${item.image} >
					<div class="overlay p-3">
						<h1 class="text-white" >${item.heading}</h1>
						<p class="text-white" >${item.description}</p>
						<a class="font-weight-bold" href=${item.link}>${item.button}</a>
					</div>
				</div>`;
					featureContainerMobile.innerHTML += `<div class="swiper-slide feature-slide">
					<img src=${item.image} >
					<div class="overlay p-3">
						<h1 class="text-white" >${item.heading}</h1>
						<p class="text-white" >${item.description}</p>
						<a class="font-weight-bold" href=${item.link}>${item.button}</a>
					</div>
				</div>`;
				}
				let swiper = new Swiper('.swiper-container-feature', {
					slidesPerView: 3,
					spaceBetween: 0,
					autoplay: {
						delay: 6000,
						disableOnInteraction: false
					},
					pagination: {
						el: '.swiper-pagination-feature',
						clickable: true
					},
					navigation: {
						nextEl: '.swiper-button-next-feature',
						prevEl: '.swiper-button-prev-feature'
					}
				});
				let swiperMobile = new Swiper('.swiper-container-feature-mobile', {
					autoplay: {
						delay: 6000,
						disableOnInteraction: false
					},
					pagination: {
						el: '.swiper-pagination-feature-mobile',
						clickable: true
					},
					navigation: {
						nextEl: '.swiper-button-next-feature-mobile',
						prevEl: '.swiper-button-prev-feature-mobile'
					}
				});
			})
			.catch((err) => {
				console.log(err);
			});
	}

	let teamContainer = document.getElementById('team');
	// console.log(teamContainer);
	if (teamContainer) {
		axios
			.get('https://www.admin.learnbird.in/fetch/teammembers')
			.then((res) => {
				// console.log(res.data.data);
				for (let item of res.data.data) {
					teamContainer.innerHTML += `<div class="team-member p-2 border m-3 position-relative text-dark cp">
					<img src=${item.image} alt="Headshot" class="" />
					<div class="pb-2 text-center">
						<h2 class="my-2 font-weight-bold"> ${item.name} </h2>
						<div class="m-0 p-0 font-weight-bold d-flex justify-content-center align-items-center">
							<div style="height: 2px; background: #262262;" class="w-25"></div>
							<p class="m-0 p-0 w-100"><em>${item.position}</em></p>
							<div style="height: 2px; background: #262262;" class="w-25"></div>
						</div>
					</div>
				</div>`;
				}
			})
			.catch((err) => {
				console.log(err);
			});
	}
});
