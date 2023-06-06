package listaJ;

import javax.swing.JOptionPane;

public class J3 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int resp=0, sim=0,homemnao=0,mulhersim=0, nao=0, masc=0, fem=0, prod=0;
		double porchomem=0.1,porcmulher=0.1;
		
		while(resp ==0){
		String sexo[] = {"Masculino","Feminino"};
		int selecionado = JOptionPane.showOptionDialog(null, "Qual o seu sexo", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,sexo,sexo[0]);
		
		if(selecionado == 0){
			masc++;
		}else if(selecionado == 1){
			fem++;
		}
		prod =  JOptionPane.showConfirmDialog(null, "Você gostou do produto ?", 
				"Entrada", JOptionPane.YES_NO_OPTION);
		if(prod == 0){
			sim++;
			
			if(selecionado == 1) {
				mulhersim++;	
				porcmulher = (mulhersim*100)/fem;

			}
		}else if(prod == 1){
			nao++;
			if(selecionado == 0) {
				homemnao++;
				porchomem = (homemnao*100) / masc;

			}
		}
		String opcoes[] = {"Continuar","Encerrar"};
		resp = JOptionPane.showOptionDialog(null, "Deseja Continuar?", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		System.out.println(resp);
		}
		
		
		System.out.println("O número de pessoas que responderam sim\n "+sim);
		System.out.println("O número de pessoas que responderam não\n "+nao);

		System.out.println("A porcentagem de mulheres que responderam SIM foi\n "+ porcmulher);
		System.out.println("A porcentagem de homens que responderam NÂO foi\n "+ porchomem);
	}

}
