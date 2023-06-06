package controleBancario;

public class Conta {
	
	private double saldo;
	public double getSaldo() {
		return saldo;
	}
	public void setSaldo(double saldo) {
		this.saldo = saldo;
	}
	public Conta(double saldo) {
		this.saldo=saldo;
	}
	public void depositar(double valor) throws MovimentoZero, MovimentoNegativo{
		if(valor == 0) throw new MovimentoZero();
		else if(valor<0) throw new MovimentoNegativo();
		else
			saldo+= valor;
	}
	public void sacar(double valor)throws MovimentoZero, MovimentoNegativo {
		
		if(valor == 0) throw new MovimentoZero();
		else if(valor<0) throw new MovimentoNegativo();
		else
			saldo -= valor;
			
		}
	public void atualizarSaldo() {
		
		if(saldo < 0) {
			double vSaldo = saldo;
			vSaldo *= 0.08;
			saldo += vSaldo;
		}
	}
	


}
