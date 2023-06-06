package exerProposto;

import java.util.Scanner;

public class LucroVetor {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		int menor10=0, maior20=0, entre1020 = 0;
		int n = 0, totCompra=0, totVenda=0, totLucro=0;
		System.out.println("Digite a Quantidade de Lançamentos");
		n = sc.nextInt();
		
		String[] vetProduto = new String[n];
		double[] vetPrecoCompra = new double[n];
		double[] vetPrecoVenda = new double[n];
		double[] vetLucro = new double[n];
		double[] vetLucroPorc = new double[n];
		
		for(int i = 0; i < n; i++){
			sc.nextLine();
			System.out.println("Digite o produto " + (i + 1));
			vetProduto[i] = sc.nextLine();
			
			System.out.println("Digite o preço da compra " + (i + 1));
			vetPrecoCompra[i] = sc.nextDouble();
			totCompra += vetPrecoCompra[i];

			System.out.println("Digite o preço da venda " + (i + 1));
			vetPrecoVenda[i] = sc.nextDouble();
			totVenda += vetPrecoVenda[i];
			
			vetLucro[i] = (vetPrecoVenda[i] - vetPrecoCompra[i]);
			vetLucroPorc[i] = (vetLucro[i] * 100) / vetPrecoCompra[i];
			totLucro += vetLucro[i];
			
			if(vetLucroPorc[i] < 10){
				menor10++;
			}else if(vetLucroPorc[i] > 20){
				maior20++;
			}else{
				entre1020++;
				
			}
		}		
		System.out.println("         RELATÓRIO\n");
		
		for(int i = 0; i < n; i++){
			System.out.println(" ");
			System.out.println("Produto digitado " + vetProduto[i]);
			System.out.println(" ");
			System.out.println("Valor total de compra " + vetPrecoCompra[i]);
			System.out.println("Valor total de venda " + vetPrecoVenda[i]);
			System.out.println("O lucro foi de R$ " + vetLucro[i]);
			System.out.println("Porcentagem de lucro foi de " + vetLucroPorc[i] + " %");
			System.out.println("--------------------------");
		}
			System.out.println("         RELATÓRIO\n");
			System.out.println("Quantidade de "+ menor10 +" mercadoria(s) abaixo de 10%");
			System.out.println("Quantidade de "+ maior20 +" mercadoria(s) maior de 20%");
			System.out.println("Quantidade de "+ entre1020 +" mercadoria(s) entre 10% e 20%");
			System.out.println("--------------------------");
			System.out.println("Valor total de compra: " + totCompra);
			System.out.println("Valor total de Venda: " + totVenda);
			System.out.println("Lucro total: " + totLucro);

	}

}
