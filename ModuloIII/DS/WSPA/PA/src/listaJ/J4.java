package listaJ;

import javax.swing.JOptionPane;

public class J4 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int resp=0,homemEnge=0,mulherPsi=0,mulherMed=0,selecionado=0,masc=0, fem=0, enge=0,adm=0,homemAdm=0, medicina=0,psicologia=0,curc=0, pessoas=0;
		double porcMed=0.1,porcHomemAdm=0.1,porcMulherMed=0.1;
		
		while(resp == 0){
		String sexo[] = {"Masculino","Feminino"};
		selecionado = JOptionPane.showOptionDialog(null, "Qual o seu sexo", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,sexo,sexo[0]);
		
		if(selecionado == 0){
			masc++;
		}else if(selecionado == 1){
			fem++;
		}		
		String curso[] = {"Administração","Engenharia da Computação","Medicina","Psicologia"};
		curc = JOptionPane.showOptionDialog(null, "Qual o seu curso", "Entrada", 0, 
				  JOptionPane.QUESTION_MESSAGE,null,curso,curso[0]);
		pessoas++;
		if(curc == 0){
			adm++;
			if(selecionado == 0) {
				homemAdm++;
			}
			porcHomemAdm = (homemAdm*100)/adm;
		}else if(curc == 1){
			enge++;
			if(selecionado == 0) {
				homemEnge++;
			}
		 }else if(curc ==2) {
			 medicina++;
			 porcMed = (medicina * 100)/pessoas;
			 if (selecionado == 1) {
				 mulherMed++;
			 }
			porcMulherMed = (mulherMed * 100)/ medicina;
		 }else if(curc ==3) {
			 psicologia++;
			 if(selecionado == 1) {
					mulherPsi++;
				}
		 }
		String opcoes[] = {"Continuar","Encerrar"};
		resp = JOptionPane.showOptionDialog(null, "Deseja Continuar?", "Entrada", 0, 
						  JOptionPane.QUESTION_MESSAGE,null,opcoes,opcoes[0]);
		System.out.println(resp);
		
		}
		System.out.println("O total de homens que pretendem cursar Engenharia da Computação\n "+homemEnge);
		System.out.println("O total de mulheres que pretendem cursar Psicologia\n "+mulherPsi);
		System.out.println("O percentual de pessoas que pretendem cursar Medicina\n "+porcMed+" %");
		System.out.println("O percentual de homens que pretendem cursar Administração\n "+porcHomemAdm+" %");
		System.out.println("O percentual de mulheres que pretendem cursar medicina\n "+porcMulherMed+" %");

	}

}
