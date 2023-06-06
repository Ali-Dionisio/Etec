package controleBancario;

import javax.swing.JOptionPane;

public class ContaCorrente extends Conta{
	
	private double limiteEspecial;
	public ContaCorrente(double saldo, double limiteEspecial) {
		super(saldo);
		this.limiteEspecial=limiteEspecial;	
	}
	public void sacar(double valor) throws MovimentoZero, MovimentoNegativo {

		if(valor>limiteEspecial) throw new MovimentoNegativo();
		else if(valor==0) throw new MovimentoZero();
		
		else if(limiteEspecial-valor>0 && getSaldo()-valor<0) {
			limiteEspecial-=valor;
			setSaldo(getSaldo()-valor);
			JOptionPane .showMessageDialog(null, "Saque do Limite Especial Concluido", 
				"Sucesso", JOptionPane.INFORMATION_MESSAGE); 
		}
		else 
			setSaldo(getSaldo()-valor);
			
	}
	public String toString() {
		return "Saldo: " + this.getSaldo() +
				"\nLimite especial: " + this.limiteEspecial;
	}
	public double getLimiteEspecial() {
		return limiteEspecial;
	}
	public void setLimiteEspecial(double limiteEspecial) {
		this.limiteEspecial = limiteEspecial;
	}
}
