package herancaExemplos;

public class Veiculo {//Super Classe ou generica
	
	
	private String combustivel; 
	private String cor;
	private int aroRodas;
	private int cilindradasMotor;
	

	public String getCombustivel() {
		return combustivel;
	}
	public void setCombustivel(String combustivel) {
		this.combustivel = combustivel;
	}
	public String getCor() {
		return cor;
	}
	public void setCor(String cor) {
		this.cor = cor;
	}
	public int getCilindradasMotor() {
		return cilindradasMotor;
	}
	public void setCilindradasMotor(int cilindradasMotor) {
		this.cilindradasMotor = cilindradasMotor;
	}
	public void setAroRodas (int aro) {
		this.aroRodas = aro;
	}
	public int getAroRodas () {
		return this.aroRodas;
	}	
	
	public void partidaMotor(){
		System.out.println("Vruuuuuuuuu");
	}
	
	public void buzinar(){
		System.out.println("Bibibiiiii");
	}
}
