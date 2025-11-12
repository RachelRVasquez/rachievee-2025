/**
 * Reduce motion functionality
 * todo: Update so JS still detects reduce motion settings and is not reliant on a button existing
 */
(function() {
	'use strict';

	document.addEventListener('DOMContentLoaded', () => {
		const button = document.getElementById('btn-reduce-motion');

		if( button === null || typeof button === 'undefined') {
			return;
		}

		const mediaQuery = window.matchMedia('(prefers-reduced-motion: reduce)');

		// Initialize button state based on system preference
		const setInitialState = () => {
			const prefersReduced = mediaQuery.matches;
			button.setAttribute('aria-pressed', prefersReduced);
			document.body.classList.toggle('reduced-motion', prefersReduced);
		};

		setInitialState();

		// Allow user to manually toggle
		button.addEventListener('click', () => {
			const isPressed = button.getAttribute('aria-pressed') === 'true';
			const newState = !isPressed;
			button.setAttribute('aria-pressed', newState);
			document.body.classList.toggle('reduced-motion', newState);
			localStorage.setItem('reducedMotion', newState);
		});

		// React if system preference changes
		mediaQuery.addEventListener('change', setInitialState);

		// On page load
		const savedPref = localStorage.getItem('reducedMotion');
		if (savedPref !== null) {
			const userPref = savedPref === 'true';
			button.setAttribute('aria-pressed', userPref);
			document.body.classList.toggle('reduced-motion', userPref);
		}
	});
})();
