import './../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'
import './../../node_modules/@ciar4n/izmir/izmir.min.css'

import { Fancybox } from '@fancyapps/ui'
import '@fancyapps/ui/dist/fancybox/fancybox.css'
Fancybox.bind('[data-fancybox]', {
			// Your custom options
		})

import Swiper from 'swiper'
import { Navigation, Pagination } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'

Swiper.use([Navigation, Pagination])

const swiper = new Swiper('.swiper', {
	// Optional parameters
	// speed: 400,
	// spaceBetween: 100,
	// direction: 'vertical',
	// loop: true,

	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
	},

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	// And if we need scrollbar
	scrollbar: {
		el: '.swiper-scrollbar',
	},
})