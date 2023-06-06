package listaJ;

import javax.swing.JOptionPane;

public class J6 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int idade=0, regiao=0,resp=0,sp=0,centro=0,homemCentro=0,mulherCentro=0,mulherSul=0,homemSul=0,sexo=0, homemOeste=0,mulherOeste=0,
				sul=0,leste=0,homemLeste=0,menino=0,totalMeninoLeste=0, norte=0, oeste=0, homemNorte=0,mulherNorte=0,mulherLeste=0,mulherSulMaior=0;
		double porcMulherSulMaior=0.1,porcHomemCentro=0.1,porcMulherCentro=0.1,porcHomemSul=0.1, porcMulherSul=0.1, porcHomemNorte=0,
				porcMulherNorte=0,porcHomemLeste=0,porcMulherLeste=0,porcHomemOeste=0, porcMulherOeste=0;
		
		while(resp ==0 ) {
		idade = Integer.parseInt(JOptionPane.showInputDialog(null, "Digite sua idade", 
				"Entrada", JOptionPane.QUESTION_MESSAGE));	
		
		String zona[] = {"Centro","Leste","Norte","Oeste","Sul"};
		regiao = JOptionPane.showOptionDialog(null, "Qual a região onde você mora?", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,zona,zona[0]);
		
		String lersexo[] = {"Masculino","Feminino", "Sair"};
		sexo = JOptionPane.showOptionDialog(null, "Qual o seu sexo", "Entrada", 0, 
					  JOptionPane.QUESTION_MESSAGE,null,lersexo,lersexo[0]);
		
		if(regiao == 0) {
			centro++;
			
			if(sexo == 0) {
				homemCentro++;
				
			}else if(sexo==1) {
				mulherCentro++;
			}
			porcHomemCentro = (homemCentro*100) / centro;
			porcMulherCentro = (mulherCentro*100) / centro;
		}
		
		if(regiao == 1) {
			leste++;
			if(sexo == 0) {
				homemLeste++;
				if(idade <= 18) {
					menino++;
				}
			}else if(sexo==1) {
				mulherLeste++;
			}
			porcHomemLeste= (homemLeste *100)/leste;
			porcMulherLeste= (mulherLeste *100)/leste;
		}
		
		if(regiao == 2) {
			norte++;
			if(sexo ==0) {
				homemNorte++;
			}else if(sexo==1) {
				mulherNorte++;
			}
			porcHomemNorte= (homemNorte *100)/norte;
			porcMulherNorte= (mulherNorte *100)/norte;
		}
		
		if (regiao == 3) {
			oeste++;
			if(sexo == 0) {
				homemOeste++;
			}else if(sexo == 1) {
				mulherOeste++;
			}
			porcHomemOeste= (homemOeste *100)/oeste;
			porcMulherOeste= (mulherOeste *100)/oeste;
		}
		if(regiao == 4) {
			sul++;
			if(sexo == 1) {
				mulherSul++;
				 if(idade >=18) {
					 mulherSulMaior++;
				 }
			}else if(sexo==0) {
				homemSul++;
			}
			porcMulherSulMaior = (mulherSulMaior *100) / sul;
			porcHomemSul = (homemSul *100)/sul;
			porcMulherSul = (mulherSul *100)/sul;
		}
		
		String opcoes[] = {"Continuar","Encerrar"};
		resp = JOptionPane.showOptionDialog(null, "Deseja Continuar?", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		sp++;

		}

		System.out.println("CENSO DA CIDADE DE SÃO PAULO\n");
		
		System.out.println("O total de homens do Centro: "+homemCentro + " e Mulheres "+mulherCentro);
		System.out.println("O total de homens da Zona Leste: "+homemLeste + " e Mulheres "+mulherLeste);
		System.out.println("O total de homens da Zona Norte: "+homemNorte+" e Mulheres "+mulherNorte);
		System.out.println("O total de homens da Zona Oeste: "+homemOeste+" e Mulheres "+mulherOeste);
		System.out.println("O total de homens da Zona Sul: "+homemSul+" e Mulheres "+mulherSul);
		
		System.out.println("A porcentagem de homens do Centro: "+porcHomemCentro + " e Mulheres "+porcMulherCentro);
		System.out.println("A porcentagem de homens da Zona Leste: "+porcHomemLeste + " e Mulheres "+porcMulherLeste);
		System.out.println("A porcentagem de homens da Zona Norte: "+porcHomemNorte+" e Mulheres "+porcMulherNorte);
		System.out.println("A porcentagem de homens da Zona Oeste: "+porcHomemOeste+" e Mulheres "+porcMulherOeste);
		System.out.println("A porcentagem de homens da Zona Sul: "+porcHomemSul+" e Mulheres "+porcMulherSul);
		
		System.out.println("O total de homens menores de idade que residem na Zona Leste da cidade: "+menino);
		System.out.println("O percentual de mulheres maiores de idade que residem na Zona sul da cidade: " + porcMulherSulMaior);
		System.out.println("O percentual de homens que residem na Zona Central da cidade: " + porcHomemCentro);
		System.out.println("O total de pessoas que residem em São Paulo: "+sp);
	}

}
