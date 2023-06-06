package extra;

import java.util.Scanner;


public class InformaSalario {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		
		int nFunc =0, codDepto, tdInfo=0, tdContab=0,tdMark=0,tdLog=0,tdDP=0;
		float salario = 0, reaInfo=0, reaContab=0, reaMark=0, reaLog=0,reaDP=0, salInfo=0, salContab=0, salMark=0,salLog=0,salDP=0,
				salarioMaior=0, salarioAntes=0; // salarioMenor=1000000000,
		float salarioMenor = Float.POSITIVE_INFINITY;
		
		System.out.println("Digite o total de funcionarios");
		nFunc = sc.nextInt();
		
		for(int i = 0; i < nFunc; i++){
			System.out.println("TABELA DE C�DIGO DE DEPARTAMENTO: \n");
			System.out.println(" - Informatica 		(1)");
			System.out.println(" - Contabilidade 	(2)");
			System.out.println(" - Marketing 		(3)");
			System.out.println(" - Logistica		(4)");
			System.out.println(" - Depto Pessoal	(5)\n");
			
			System.out.println("Meu departamento �: ");
			codDepto = sc.nextInt();
			
			System.out.println("Informe o seu sal�rio");
			salario = sc.nextFloat();
			if(salario < 0){
				System.out.println("Sal�rio " + salario + " inv�lido");
			}
			if(codDepto == 1){
				//informatica
				tdInfo++;
				reaInfo = salario + (salario * 10)/ 100;
				salInfo +=reaInfo;	
				
				salarioAntes += reaInfo;
				
				if(salarioAntes >  salarioMaior){
					salarioMaior =+ salarioAntes;
				}
				if(salarioAntes < salarioMenor){
					salarioMenor =+ salarioAntes;
				}
			}else if(codDepto == 2){
				//contab
				tdContab++;
				reaContab = salario + (salario * 15)/ 100;
				salContab += reaContab;
				
				salarioAntes += reaContab;
				
				if(salarioAntes >  salarioMaior){
					salarioMaior =+ salarioAntes;
				}
				if(salarioAntes < salarioMenor){
					salarioMenor =+ salarioAntes;
				}
			}else if(codDepto == 3){
				//markt
				tdMark++;
				reaMark = salario + (salario * 20)/ 100;
				salMark +=reaMark;
				
				salarioAntes += reaMark;
				
				if(salarioAntes >  salarioMaior){
					salarioMaior =+ salarioAntes;
				}
				if(salarioAntes < salarioMenor){
					salarioMenor =+ salarioAntes;
				}
			}else if(codDepto == 4){
				//logistica
				tdLog++;
				reaLog = salario + (salario * 17)/ 100;
				salLog +=reaLog;
				
				salarioAntes += reaLog;
				
				if(salarioAntes >  salarioMaior){
					salarioMaior =+ salarioAntes;
				}
				if(salarioAntes < salarioMenor){
					salarioMenor =+ salarioAntes;
				}
			}else if(codDepto == 5){
				//DP
				tdDP++;
				reaDP = salario + (salario * 13)/ 100;
				salDP +=reaDP;
				
				salarioAntes += reaDP;
				
				if(salarioAntes >  salarioMaior){
					salarioMaior =+ salarioAntes;
				}
				if(salarioAntes < salarioMenor){
					salarioMenor =+ salarioAntes;
				}
			}else if(codDepto ==0){
				break;
			}
			else{
				System.out.println("Departamento inexistente");
			}	
			salarioAntes=0;
		}	
		System.out.println("RELAT�RIO POR DEPARTAMENTO\n");
		System.out.println("O total de funcionarios de Informatica �: " + tdInfo);
		System.out.println("A somatoria do sal�rio �: " + salInfo);
			System.out.println("----------------------------------------------------");
		System.out.println("O total de funcionarios de Contabilidade �: " + tdContab);
		System.out.println("A somatoria do sal�rio �: " + salContab);
			System.out.println("----------------------------------------------------");
		System.out.println("O total de funcionarios de Markenting �: " + tdMark);
		System.out.println("A somatoria do sal�rio �: " + salMark);
			System.out.println("----------------------------------------------------");
		System.out.println("O total de funcionarios de Logistica �: " + tdLog);
		System.out.println("A somatoria do sal�rio �: " + salLog);
			System.out.println("----------------------------------------------------");
		System.out.println("O total de funcionarios de Departamento Pessoal �: " + tdDP);
		System.out.println("A somatoria do sal�rio �: " + salDP);
			System.out.println("----------------------------------------------------");
			System.out.println("----------------------------------------------------");	
			System.out.println("RELAT�RIO TOTAL\n");
		System.out.println("O total de funcionarios �: " +( tdDP + tdLog + tdMark + tdContab + tdInfo ));
		System.out.println("Folha de pagamento total da empresa: " +( salDP + salLog + salMark + salContab + salInfo));
			System.out.println("----------------------------------------------------");
		System.out.println("O maior sal�rio � "+salarioMaior);
		System.out.println("O menor sal�rio � "+salarioMenor);
		
		}//Fim Metodo
	}//Fim Classe