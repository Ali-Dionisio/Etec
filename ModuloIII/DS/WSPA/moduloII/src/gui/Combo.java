package gui;

import java.awt.Component;
import java.awt.Container;
import java.awt.FlowLayout;
import java.awt.Font;
import java.awt.Image;
import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;

import javax.swing.ImageIcon;
import javax.swing.JCheckBox;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;

import gui.Check.OuvinteCheckBox;

public class Combo extends JFrame{
	JComboBox<String> segunda, terca, quarta, quinta, sexta;
	JLabel label;
	Image icone0 = new ImageIcon(getClass().getResource("icones/escolha.jpg")).getImage().getScaledInstance(250, 250, 100);
	ImageIcon escolha = new ImageIcon(icone0);
	Image icone1 = new ImageIcon(getClass().getResource("icones/segunda.jpg")).getImage().getScaledInstance(250, 250, 100);
	ImageIcon seg = new ImageIcon(icone1);
	Image icone2 = new ImageIcon(getClass().getResource("icones/terca.jpg")).getImage().getScaledInstance(250, 250, 100);
	ImageIcon ter = new ImageIcon(icone2);
	Image icone3 = new ImageIcon(getClass().getResource("icones/quarta.jpg")).getImage().getScaledInstance(250, 250, 100);
	ImageIcon quar = new ImageIcon(icone3);
	Image icone4 = new ImageIcon(getClass().getResource("icones/quinta.jpg")).getImage().getScaledInstance(250, 250, 100);
	ImageIcon quin = new ImageIcon(icone4);
	Image icone5 = new ImageIcon(getClass().getResource("icones/sexta.jpg")).getImage().getScaledInstance(250, 250, 100);
	ImageIcon sex = new ImageIcon(icone5);
	Image icone6 = new ImageIcon(getClass().getResource("icones/sabado.jpg")).getImage().getScaledInstance(250, 250, 100);
	ImageIcon sab = new ImageIcon(icone6);
	Image icone7 = new ImageIcon(getClass().getResource("icones/domingo.jpg")).getImage().getScaledInstance(250, 250, 100);
	ImageIcon dom = new ImageIcon(icone7);
	
	private JComboBox<String> combo;
	public Combo() {		
		super("Exemplo ComboBox");
		Container c = getContentPane();
		c.setLayout(new FlowLayout());
		combo = new JComboBox<String>();

		label = new JLabel(escolha);
		combo.addItem("--Selecione--");	
		combo.addItem("Segunda-feira");	
		combo.addItem("Terça-feira");	
		combo.addItem("Quarta-feira");	
		combo.addItem("Quinta-feira");	
		combo.addItem("Sexta-feira");
		combo.addItem("Sábado");
		combo.addItem("Domingo");
		
		c.add(combo);
		combo.addItemListener(new OuvinteCheckBox());	
		c.add(label);

		
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setSize(450, 300);
		setVisible(true);
		
		
	}
	class OuvinteCheckBox implements ItemListener{
		public void itemStateChanged(ItemEvent e){
			if (combo.getSelectedItem() == "Segunda-feira"){
				System.out.println("Segunda-feira");
				label.setIcon(seg);
			}else if(combo.getSelectedItem() == "Terça-feira"){
				System.out.println("Terça-feira");
				label.setIcon(ter);
			}else if(combo.getSelectedItem() == "Quarta-feira"){
				System.out.println("Quarta-feira");
				label.setIcon(quar);
			}else if(combo.getSelectedItem() == "Quinta-feira"){
				System.out.println("Quinta-feira");
				label.setIcon(quin);
			}else if(combo.getSelectedItem() == "Sexta-feira"){
				System.out.println("Sexta-feira");
				label.setIcon(sex);
			}else if(combo.getSelectedItem() == "Sábado"){
				System.out.println("Sabado");
				label.setIcon(sab);
			}else if(combo.getSelectedItem() == "Domingo"){
				System.out.println("Domingo");
				label.setIcon(dom);
			}else{
				System.out.println("5");
				//label = new JLabel(icone5);
			}		
		}
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		new Combo();
	}

}
