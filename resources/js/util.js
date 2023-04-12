export const calcAge = birthDay => {
	if (!birthDay) return;
	const now = new Date();
	const currentYear = now.getFullYear();
	const birthYear = birthDay.slice(0, 4);

	return currentYear - birthYear;
}