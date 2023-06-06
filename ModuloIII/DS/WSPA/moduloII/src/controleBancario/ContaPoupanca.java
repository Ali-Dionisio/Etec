package controleBancario;

public class ContaPoupanca extends Conta {

	private double reajusteMensal= 1;
	
	
	public ContaPoupanca(double saldo, double reajusteMensal) {
		super(saldo);
		this.reajusteMensal=reajusteMensal;
	}
	public void atualizarSaldo(double valor)  throws MovimentoZero, MovimentoNegativo{
		if(valor== 0) throw new MovimentoZero();
		else if(valor < 0)throw new MovimentoNegativo();
		else {
			setSaldo(getSaldo() +(valor/100) * getSaldo());
			reajusteMensal=valor;			
		}
	}
	public String toString() {
		return "reajusteMensal: " + this.getReajusteMensal() +"%"+
				"\nSaldo: " + this.getSaldo();
	}
	public double getReajusteMensal() {
		return reajusteMensal;
	}
	public double setReajusteMensal(double reajusteMensal) {
		return this.reajusteMensal =reajusteMensal;
	}
	
	
	
	
}
