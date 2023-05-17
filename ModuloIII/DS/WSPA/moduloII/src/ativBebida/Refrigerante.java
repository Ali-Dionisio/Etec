package ativBebida;

public class Refrigerante extends Bebida{
	private boolean retornavel;

	public String mostrarBebida(){
		return "Nome: " + this.getNome() + 
				"\nPreco: " + this.getPreco() +
				"\nRetornavel: " + retornavel;
	}
	
	public Refrigerante() {
		//
	}

	public Refrigerante(String vNome, double vPreco, boolean vRetornavel){ //Vinho = construtor
		this.setNome(vNome);
		this.setPreco(vPreco);
		this.retornavel = vRetornavel;
		
		
	}
	
	public boolean verificarPreco(double preco) {
		if(preco<5) {
			return true;
		}else {
			return false;
		
		}
	}
	
	public boolean getRetornavel() {
		return retornavel;
	}

	public void setRetornavel(boolean retornavel) {
		this.retornavel = retornavel;
	}
	
	
}
