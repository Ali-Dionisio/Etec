package extra;

import javax.swing.JOptionPane;

public class cadastrarProdutos {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int celular, cor,qtde, totalAparelhos=0, samsung=0,apple=0,motorola=0,asus=0,xiaomi=0, azul=0, quantidade=0,totalGeralAparelhos=0;
		double preco=0.1, precoTotal=0,total=0,samsungPreco=0,mediaSamsung=0,mediaApple=0,mediaMotorola=0,mediaAsus=0,mediaXiaomi=0,applePreco=0,
				motorolaPreco=0,asusPreco=0,xiaomiPreco=0;
		
		while(preco != 000){
		String modelo[] = {"Samsung","Apple","Motorola","Asus","Xiaomi"};
		celular = JOptionPane.showOptionDialog(null, "Informe o aparelho", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,modelo,modelo[0]);
		
		String cores[] = {"Azul","Vermelho","Prata"};
		cor = JOptionPane.showOptionDialog(null, "Informe a cor", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,cores,cores[0]);
		
		preco = Double.parseDouble(JOptionPane.showInputDialog(null, "Digite o preço do aparelho", "Preço",
				JOptionPane.QUESTION_MESSAGE));
		
		
		qtde = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite a quantidade de aparelho(os)", "Quantidade",
				JOptionPane.QUESTION_MESSAGE));
		quantidade +=qtde;
		
		if(celular == 0){
			samsung+=qtde;
			samsungPreco+=preco;
		}else if(celular == 1){
			apple+=qtde;
			applePreco+=preco;
		}else if(celular == 2){
			motorola+=qtde;
			motorolaPreco+=preco;
		}else if(celular == 3){
			asus+=qtde;
			asusPreco+=preco;
		}else if(celular == 4){
			xiaomi+=qtde;
			xiaomiPreco+=preco;
		}
		
				
		if(cor == 0){
			azul++;
		}
		
		}
		mediaSamsung = samsungPreco / samsung;
		mediaApple = applePreco / apple;
		mediaMotorola = motorolaPreco / motorola;
		mediaAsus = asusPreco / asus;
		mediaXiaomi = xiaomiPreco / xiaomi;

		
		System.out.println("O total de aparelhos é\n "+quantidade );
		
		System.out.println("TOTAL POR FABRICANTE\n");
		System.out.println("Apple - " + apple);
		System.out.println("Samsung - " + samsung);
		System.out.println("Motorola - " + motorola);
		System.out.println("Asus - " + asus);
		System.out.println("Xiaomi - " + xiaomi);
		System.out.println("PREÇO MÉDIO POR FABRICANTE\n");
		
		System.out.println("Média Samsung - " + mediaSamsung);
		System.out.println("Média Apple - " + mediaApple);
		System.out.println("Média Motorola - " + mediaMotorola);
		System.out.println("Média Asus - " + mediaAsus);
		System.out.println("Média Xiaomi - " + mediaXiaomi);

		System.out.println("Total de aparelhos da cor AZUL - " + azul);

	}

}
