package exerProposto;

import java.util.Scanner;

public class pesquisaVetor {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner ler = new Scanner(System.in);
		int n = 0, dadoPosicao=0, option=0, tipoPesquisa=0;
	
		int[] rg = {111, 222, 333, 444, 555};
		String[] nome = {"Ana", "Joelma", "Pedrita", "Geronimo"};
		String[] email = {"ana@google", "joelma@google", "pedrita@google", "geronimo@google"};
		int[] cep = {1001,2002,3003,4004,5005};

		System.out.println("Digite a Quantidade de pesquisas");
		n = ler.nextInt();
		
		System.out.println("0 RG");
		System.out.println("1 Nome");
		System.out.println("2 E-mail");
		System.out.println("3 CEP");
		System.out.println(" ");
		System.out.println("O que deseja pesquisar ?");
		tipoPesquisa = ler.nextInt();
		
			if(tipoPesquisa == 0) {
				System.out.println("0 - por dado cadastrado ou 1 - posição no vetor");
				System.out.println("Deseja pesquisar por dado cadastrado ou pela posição no vetor ?");
				dadoPosicao = ler.nextInt();
				
				if(dadoPosicao == 0) {
					System.out.println("Digite o numero do RG ");
					int dado = ler.nextInt();
				
						
					for(int i = 0; i < n; i++){
						System.out.println("RG " + rg[n]);
						System.out.println("RG " + nome[n]);
						System.out.println("RG " + email[n]);
						System.out.println("RG " + cep[n]);
						System.out.println("--------------------------");
					}
					
				}else if(dadoPosicao == 1) {					
					System.out.println("Digite a posição do RG ");
					int posicao = ler.nextInt();
					
					for(int i = 0; i < n; i++){
						System.out.println("RG " + rg[posicao]);
						System.out.println("Nome " + nome[posicao]);
						System.out.println("E-mail " + email[posicao]);
						System.out.println("CEP " + cep[posicao]);
			
						System.out.println("--------------------------");
					}
					
				}else {
					System.out.println("Opção invalida");
				}
			}else if(tipoPesquisa==1) {
				System.out.println("0 - por dado cadastrado ou 1 - posição no vetor");
				System.out.println("Deseja pesquisar por dado cadastrado ou pela posição no vetor ?");
				dadoPosicao = ler.nextInt();
				
				if(dadoPosicao == 0) {
					System.out.println("Digite o nome ");
					int dado = ler.nextInt();
					
						
					for(int i = 0; i < n; i++){
						System.out.println("RG " + nome[dado]);
						System.out.println("RG " + rg[dado]);
						System.out.println("RG " + email[dado]);
						System.out.println("RG " + cep[dado]);
			
						System.out.println("--------------------------");
					}
					
				}else if(dadoPosicao == 1) {					
					System.out.println("Digite a posição do nome ");
					int posicao = ler.nextInt();
					
					for(int i = 0; i < n; i++){
						System.out.println("Nome " + nome[posicao]);
						System.out.println("RG " + rg[posicao]);
						System.out.println("E-mail " + email[posicao]);
						System.out.println("CEP " + cep[posicao]);
			
						System.out.println("--------------------------");
					}
				}
				}else if(tipoPesquisa==2) {
					System.out.println("0 - por dado cadastrado ou 1 - posição no vetor");
					System.out.println("Deseja pesquisar por dado cadastrado ou pela posição no vetor ?");
					dadoPosicao = ler.nextInt();
					
					if(dadoPosicao == 0) {
						System.out.println("Digite o Email ");
						int dado = ler.nextInt();
						
							
						for(int i = 0; i < n; i++){
							System.out.println("RG " + nome[dado]);
							System.out.println("RG " + rg[dado]);
							System.out.println("RG " + email[dado]);
							System.out.println("RG " + cep[dado]);
				
							System.out.println("--------------------------");
						}
						
					}else if(dadoPosicao == 1) {					
						System.out.println("Digite a posição do Email ");
						int posicao = ler.nextInt();
						
						for(int i = 0; i < n; i++){
							System.out.println("Nome " + nome[posicao]);
							System.out.println("RG " + rg[posicao]);
							System.out.println("E-mail " + email[posicao]);
							System.out.println("CEP " + cep[posicao]);
				
							System.out.println("--------------------------");
						}
					}
					}else if(tipoPesquisa==3) {
						System.out.println("0 - por dado cadastrado ou 1 - posição no vetor");
						System.out.println("Deseja pesquisar por dado cadastrado ou pela posição no vetor ?");
						dadoPosicao = ler.nextInt();
						
						if(dadoPosicao == 0) {
							System.out.println("Digite o cep ");
							int dado = ler.nextInt();
							
								
							for(int i = 0; i < n; i++){
								System.out.println("RG " + nome[dado]);
								System.out.println("RG " + rg[dado]);
								System.out.println("RG " + email[dado]);
								System.out.println("RG " + cep[dado]);
					
								System.out.println("--------------------------");
							}
							
						}else if(dadoPosicao == 1) {					
							System.out.println("Digite a posição do cep ");
							int posicao = ler.nextInt();
							
							for(int i = 0; i < n; i++){
								System.out.println("Nome " + nome[posicao]);
								System.out.println("RG " + rg[posicao]);
								System.out.println("E-mail " + email[posicao]);
								System.out.println("CEP " + cep[posicao]);
					
								System.out.println("--------------------------");
							}
						}
						}else {
							System.out.println("Opção invalida");
						}
					
				}
			}
		
	
