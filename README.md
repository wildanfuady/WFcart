# WFcart
Free Open Source Library / Package Shopping Cart For Codeigniter 4

## Cara Penggunaan

1. Tambahkan kode berikut sebelum nama class di Controller

[code]use Wildanfuady\WFcart\WFcart;[/code]

2. Pada function construct, tambahkan baris kode di bawah ini:

[pre]public function __construct() {

	$this->cart = new WFcart();

}[/pre]

3. Untuk mendapatkan data total keranjang belanja, gunakan perintah di bawah ini:

[code]$this->cart->totals();[/code]

3. Untuk mendapatkan data total belanja ( quantity * sub total), gunakan perintah di bawah ini:

[code]$this->cart->count_totals();[/code]

3. Untuk memasukan suatu product ke dalam keranjang belanja, gunakan perintah di bawah ini:

[code]$id = 1;
$item = [
	'id'		=> 1,
	'name'		=> 'Product 1,
	'price'		=> 1000,
	'photo'		=> 'Lorem ipsum,
	'quantity'	=> 1
];
// cek session cart sudah ada atau belum
$this->cart->add_cart($id, $item);[/code]

4. Untuk menghapus suatu product berdasarkan id di dalam keranjang belanja, gunakan perintah di bawah ini:

[code]$this->cart->remove($id);[/code]

5. Untuk mengupdate keranjang belanja, silahkan gunakan perintah di bawah ini:

[code]$this->cart->update();[/code]
