import java.util.Random;

public class Player {

    private String name;
    private String description;
    private int maxHp;
    private int hp;
    private int minDamage;
    private int maxDamage;
    private int Heal;
    private Random random = new Random();

    public Player(String name, String description, int maxHp, int minDamage, int maxDamage, int Heal) {
        this.name = name;
        this.description = description;
        this.maxHp = maxHp;
        this.minDamage = minDamage;
        this.maxDamage = maxDamage;
        this.hp = maxHp;
        this.Heal = Heal;
    }

    @Override
    public String toString() {
        return name;
    }

    public String getStatus() {
        return "Player HP: " + hp;
    }

    public String getDescription() {
        return description;
    }

    public int attack() {
        return random.nextInt(maxDamage - minDamage + 1) + minDamage;
    }

    public void heal() {
        hp = Math.min(maxHp, hp) + Heal;
        System.out.printf("  %s drinks healing potion (%s)\n",
                name, getStatus());
    }

    public void defend(Monster monster) {
        int attackStrength = monster.attack();
        hp = (hp > attackStrength) ? hp - attackStrength : 0;
        System.out.printf("  " + name + " is hit for %s HP of damage (%s)\n",
                attackStrength, getStatus());
        if (hp == 0) {
            System.out.println("  " + name + " has been defeated");
        }
    }

    public boolean isAlive() {
        return hp > 0;
    }
}
