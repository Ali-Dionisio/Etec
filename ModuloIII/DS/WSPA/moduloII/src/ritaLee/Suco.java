package ritaLee;

public class Suco extends Bebida{
	private String sabor;

	public String mostrarBebida(){
		return "Nome: " + this.getNome() + 
				"\nPreco: " + this.getPreco() +
				"\nSabor: " + sabor;
	}
	
	public Suco() {
		//
	}

	public Suco(String vNome, double vPreco, String vSabor){ //Vinho = construtor
		this.setNome(vNome);
		this.setPreco(vPreco);
		this.sabor = vSabor;
		
		
	}
	
	public boolean verificarPreco(double preco) {
		if(preco<2.5) {
			return true;
		}else {
			return false;
		
		}
	}
	
	public String getSabor() {
		return sabor;
	}

	public void setSabor(String sabor) {
		this.sabor = sabor;
	}
	
	
	
}
