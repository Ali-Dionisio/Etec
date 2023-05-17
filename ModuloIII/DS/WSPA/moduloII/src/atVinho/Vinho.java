package atVinho;

public class Vinho {
	
	private String nome, tipo;
	private double preco;
	private int safra;
	
	public Vinho() {
		//
	}
	
	public Vinho(String vNome, String vTipo, double vPreco, int vSafra){ //Vinho = construtor
		this.nome = vNome;
		this.tipo = vTipo;
		this.preco = vPreco;
		this.safra = vSafra;
	}
	
	public String mostrarVinho() {
		return "Nome: " + this.nome + "\nTipo: " + this.tipo + "\nPreço: R$ " + 
						  this.preco + "\nSafra: " + this.safra;
	}
	
	
	public boolean verificarPreco(double preco) {
		if(preco<25) {
			return true;
		}else {
			return false;
		
		}
		
	}
}
