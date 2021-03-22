public class City {

    private String description;
    private Monster monster;

    private City(String description, Monster monster) {
        this.description = description;
        this.monster = monster;
    }

    public static City newCity() {

        String roomDescription;
        roomDescription = " the northern kingdom ";
        return new City(roomDescription, Monster.newMonsterCity());
    }

    public static City newCity2() {

        String roomDescription;
        roomDescription = " the southern kingdom ";
        return new City(roomDescription, Monster.newMonsterCity());
    }

    public static City newCity3() {

        String roomDescription;
        roomDescription = " the westhern kingdom ";
        return new City(roomDescription, Monster.newMonsterCity());
    }

    public static City newCity4() {

        String roomDescription;
        roomDescription = " the easthern kingdom ";
        return new City(roomDescription, Monster.newMonsterCity());
    }

    @Override
    public String toString() {
        return description;
    }

    public void enter(Player player) {
        System.out.println("You are in " + description);
        if (monster.isAlive()) {
            new Battle(player, monster);
        }
    }
}
