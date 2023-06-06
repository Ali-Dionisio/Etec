package ritaLee;

public class Vinho extends Bebida{
	
	private int safra;
	private String tipo;
	
	public String mostrarBebida(){
		return "Nome: " + this.getNome() + 
				"\nPreco: " + this.getPreco() +
				"\nSafra: " + this.safra +
				"\nTipo: " + this.tipo;
	}
	
	public Vinho() {
		//
	}

	public Vinho(String vNome, String vTipo, double vPreco, int vSafra){ //Vinho = construtor
		this.setNome(vNome);
		this.tipo = vTipo;
		this.setPreco(vPreco);
		this.safra = vSafra;
		
		
	}
	
	public boolean verificarPreco(double preco) {
		if(preco<25) {
			return true;
		}else {
			return false;
		
		}
	}
	public int getSafra() {
		return safra;
	}
	public void setSafra(int safra) {
		this.safra = safra;
	}
	public String getTipo() {
		return tipo;
	}
	public void setTipo(String tipo) {
		this.tipo = tipo;
	}
	
	
}
