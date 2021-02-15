<?php
/**
 * @param $id
 * @return array массив дочерней категории
 */
function getChildCategories($id) {
    $sql = 'SELECT * FROM categories WHERE parent_id=:id';
    $params = $id;

    $stmt = db()->prepare($sql);
    $stmt->execute(['id' => $params]);

    $chi = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $chi;

}

/**
 * @return array массив родительской категории
 */
function getAllCategories() {
    $sql = 'SELECT * FROM categories WHERE parent_id = :parent_id';
    $params = 0;

    $stmt = db()->prepare($sql);
    $stmt->execute(['parent_id'=>$params]);

    $smartyArr = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
        $childrenArr = getChildCategories($row['id']);

        if($childrenArr) {
            $row['children'] = $childrenArr;
        }

        $smartyArr[] = $row;
    }
    return $smartyArr;
}
