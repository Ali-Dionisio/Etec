package extra;

import java.util.Scanner;

public class problema3 {

	public static void main(String[] args) {
		Scanner ler = new Scanner(System.in);
		double precoProduto, quantidade, pago, troco, apagar;
		System.out.println("Digite o preco do produto");
		precoProduto = ler.nextDouble();
		System.out.println("Digite a quantidade de produtos comprados");
		quantidade = ler.nextDouble();
		System.out.println("Digite o dinheiro recebido");
		pago = ler.nextDouble();
		
		apagar = precoProduto * quantidade;
		troco = pago - apagar;
		
		if(troco < 0){
			System.out.println("O valor pago é insuficiente");
			System.out.println("Ficou faltando " + troco + " para poder efetuar o pagamento");
		}
		if(troco >= 0){
			System.out.println("Preço unitario " + precoProduto);
			System.out.println("Quantidade comprada " + quantidade);
			System.out.println("Total da compra " + apagar);
			System.out.println("Dinheiro recebido " + pago);
			System.out.println("Troco: " + troco);
		}
	}

}
