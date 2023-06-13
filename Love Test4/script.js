const loveCalculator = {
	// Fungsi untuk menghitung persentase kecocokan
	calculatePercentage: function(name, crush) {
		// Hitung persentase kecocokan secara acak
		const percentage = Math.floor(Math.random() * 101);
		return percentage; 
	},

	// Fungsi untuk menampilkan hasil perhitungan
	showResult: function(name, crush) {
		const percentage = this.calculatePercentage(name, crush);
		const result = document.getElementById("result");
		result.innerHTML = `The love percentage between ${name} and ${crush} is ${percentage}%`;
	}
};

// Fungsi yang dipanggil saat tombol Calculate ditekan
function calculate() {
	const name = document.getElementById("name").value;
	const crush = document.getElementById("crush").value;

	if (name && crush) {
		loveCalculator.showResult(name, crush);
	}
}
